<?php
/**
* 2010-2021 Webkul.
*
* NOTICE OF LICENSE
*
* All right is reserved,
* Please go through LICENSE.txt file inside our module
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade this module to newer
* versions in the future. If you wish to customize this module for your
* needs please refer to CustomizationPolicy.txt file inside our module for more information.
*
* @author Webkul IN
* @copyright 2010-2021 Webkul IN
* @license LICENSE.txt
*/

class WkSampleProductSampleFileModuleFrontController extends ModuleFrontController
{
    public function displayAjaxSaveSampleFile()
    {
        $this->uploadFile();
    }

    public function displayAjaxDeleteSample()
    {
        $this->deleteFile(true);
    }

    public function deleteFile($isDeleteAction = false)
    {
        $objSampleProduct = new WkSampleProductMap();
        if ($sampleFileName = $objSampleProduct->getSampleFileName(Tools::getValue('id_product'))) {
            $fileDir = _PS_MODULE_DIR_.$this->module->name.'/views/samples/';
            if (Tools::strlen(trim($sampleFileName['sample_file']))
                && file_exists($fileDir.$sampleFileName['sample_file'])
            ) {
                unlink($fileDir.$sampleFileName['sample_file']);
            }
            if ($isDeleteAction) {
                $objSample = new WkSampleProductMap($sampleFileName['id_sample_product']);
                $objSample->sample_file = pSQL('');
                $objSample->save();
            }
        }
        if ($isDeleteAction) {
            $result = array(
                'success' => 1,
                'text' => $this->module->l('Sample product deleted successfully.', 'samplefile')
            );
            die(json_encode($result));
        }
    }

    public function uploadFile()
    {
        $result = array(
            'success' => 0,
            'text' => $this->module->l('Something went wrong.', 'samplefile')
        );
        if (array_key_exists('pictureFile', $_FILES)) {
            // Check standard virtual available
            $idProduct = Tools::getValue('id_product');
            $product_download = new ProductDownload();
            if ($id_product_download = $product_download->getIdFromIdProduct($idProduct)) {
                $product_download = new ProductDownload($id_product_download);
                if ($product_download->id) {
                    $sampleFile = $_FILES['pictureFile'];
                    if ($sampleFile['size']/1000000 >= Configuration::get('PS_ATTACHMENT_MAXIMUM_SIZE')) {
                        $result = array(
                            'success' => 0,
                            'text' => $this->module->l('File is too large.', 'samplefile')
                        );
                    }
                    $fileDir = _PS_MODULE_DIR_.$this->module->name.'/views/samples';
                    if (!file_exists($fileDir)) {
                        @mkdir($fileDir.'/', 0777, true);
                    }
                    if (!file_exists($fileDir.'/index.php')) {
                        @copy(
                            _PS_MODULE_DIR_.$this->module->name.'/index.php',
                            $fileDir.'/index.php'
                        );
                    }

                    $name = $sampleFile['name'];
                    $this->deleteFile();
                    $helper = new HelperUploader('virtual_product_file_uploader');
                    $objSampleProduct = new WkSampleProductMap();
                    if ($sampleFileProduct = $objSampleProduct->getSampleFileName(Tools::getValue('id_product'))) {
                        $file = $helper->setPostMaxSize(Tools::getOctets(ini_get('upload_max_filesize')))
                            ->setSavePath($fileDir.'/')->upload($sampleFile, $name);
                        if (isset($file['error'])
                            && ((int)$file['error'] != 0)
                            && (Tools::strlen($file['error']) > 0)
                        ) {
                            $result = array(
                                'success' => 0,
                                'text' => $file['error']
                            );
                        } else {
                            $objSample = new WkSampleProductMap($sampleFileProduct['id_sample_product']);
                            $objSample->sample_file = pSQL($name);
                            $objSample->save();
                            $result = array(
                                'success' => 1,
                                'text' => $this->module->l('Sample product uploaded successfully.', 'samplefile'),
                                'name' => $name
                            );
                        }
                    }
                } else {
                    $result = array(
                        'success' => 0,
                        'text' => $this->module->l('Please add standard virtual file first.', 'samplefile')
                    );
                }
            }
        }
        die(json_encode($result));
    }
}
