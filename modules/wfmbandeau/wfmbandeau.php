<?php

if (!defined('_PS_VERSION_'))
    exit;

class wfmbandeau extends Module
{
    public function __construct()
    {
        $this->name = 'wfmbandeau';
        $this->tab = 'front_office_features';
        $this->version = '1.0';
        $this->author = 'Web For Me';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('WFM - Bandeau haut de page');
        $this->description = $this->l('Ajoute un bandeau dans le header');

        $this->confirmUninstall = $this->l('Are you sure you want to delete this module ?');
    }

    public function install()
    {
        if (!parent::install()
            || !$this->registerHook('displayBandeauTop')
            || !$this->registerHook('displayHeader')
        ) {
            return false;
        }
        return true;
    }

    public function getContent()
    {
        return $this->postProcess().$this->renderForm();
    }

    public function postProcess()
    {
        $output = '';
        if (Tools::isSubmit('submit'.$this->name)) {
            Configuration::updateValue('WFM_BANDEAU_PROMO_LINK_DEFAULT', strval(Tools::getValue('WFM_BANDEAU_PROMO_LINK_DEFAULT')));
            Configuration::updateValue('WFM_BANDEAU_PROMO_LINK', strval(Tools::getValue('WFM_BANDEAU_PROMO_LINK')));
            Configuration::updateValue('WFM_BANDEAU_PROMO_TEXT_DEFAULT', Tools::getValue('WFM_BANDEAU_PROMO_TEXT_DEFAULT'), true);
            Configuration::updateValue('WFM_BANDEAU_PROMO_TEXT', Tools::getValue('WFM_BANDEAU_PROMO_TEXT'), true);
            Configuration::updateValue('WFM_BANDEAU_PROMO_BACKGROUND_DEFAULT', strval(Tools::getValue('WFM_BANDEAU_PROMO_BACKGROUND_DEFAULT')));
            Configuration::updateValue('WFM_BANDEAU_PROMO_BACKGROUND', strval(Tools::getValue('WFM_BANDEAU_PROMO_BACKGROUND')));
            Configuration::updateValue('WFM_BANDEAU_PROMO_COLOR_DEFAULT', strval(Tools::getValue('WFM_BANDEAU_PROMO_COLOR_DEFAULT')));
            Configuration::updateValue('WFM_BANDEAU_PROMO_COLOR', strval(Tools::getValue('WFM_BANDEAU_PROMO_COLOR')));
            Configuration::updateValue('WFM_BANDEAU_PROMO_COLOR_STRONG_DEFAULT', strval(Tools::getValue('WFM_BANDEAU_PROMO_COLOR_STRONG_DEFAULT')));
            Configuration::updateValue('WFM_BANDEAU_PROMO_COLOR_STRONG', strval(Tools::getValue('WFM_BANDEAU_PROMO_COLOR_STRONG')));
            Configuration::updateValue('WFM_BANDEAU_PROMO_SIZE_DEFAULT', strval(Tools::getValue('WFM_BANDEAU_PROMO_SIZE_DEFAULT')));
            Configuration::updateValue('WFM_BANDEAU_PROMO_SIZE', strval(Tools::getValue('WFM_BANDEAU_PROMO_SIZE')));
            Configuration::updateValue('WFM_BANDEAU_PROMO_SIZE_MOBILE_DEFAULT', strval(Tools::getValue('WFM_BANDEAU_PROMO_SIZE_MOBILE_DEFAULT')));
            Configuration::updateValue('WFM_BANDEAU_PROMO_SIZE_MOBILE', strval(Tools::getValue('WFM_BANDEAU_PROMO_SIZE_MOBILE')));
            $date_from = strval(Tools::getValue('WFM_BANDEAU_PROMO_DATE_FROM'));
            $date_to = strval(Tools::getValue('WFM_BANDEAU_PROMO_DATE_TO'));
            // check dates
            if(!$date_from == '')
                $from = '0000-00-00 00:00:00';
            else
                $from = new DateTime($date_from);
            if(!$date_to == '')
                $to = '0000-00-00 00:00:00';
            else
                $to = new DateTime($date_to);
            if ($from > $to) {
                $output.= $this->displayError('La date de début doit être inférieure à celle de fin.');
            } else {
                Configuration::updateValue('WFM_BANDEAU_PROMO_DATE_FROM', $date_from);
                Configuration::updateValue('WFM_BANDEAU_PROMO_DATE_TO', $date_to);
            }
        }

        return $output;
    }

    public function renderForm()
    {
        // Get default language
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

        // Add datepicker
        $this->context->controller->addJqueryUI('ui.datepicker');

        // Init Fields form array
        $fields_form[1]['form'] = array(
            'legend' => array(
                'title' => $this->l('OPERATION EN COURS'),
            ),
            'input' => array(
                array(
                    'type' => 'date',
                    'class' => 'datepicker',
                    'label' => $this->l('Afficher à partir du '),
                    'name' => 'WFM_BANDEAU_PROMO_DATE_FROM',
                    'size' => 20,
                    'required' => true
                ),
                array(
                    'type' => 'date',
                    'class' => 'datepicker',
                    'label' => $this->l('Afficher jusqu\'au'),
                    'name' => 'WFM_BANDEAU_PROMO_DATE_TO',
                    'size' => 20,
                    'required' => true,
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Texte bandeau'),
                    'name' => 'WFM_BANDEAU_PROMO_TEXT',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Lien bandeau'),
                    'name' => 'WFM_BANDEAU_PROMO_LINK',
                ),
                array(
                    'type' => 'color',
                    'size' => 30,
                    'label' => $this->l('Couleur Background'),
                    'name' => 'WFM_BANDEAU_PROMO_BACKGROUND',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Taille police (précisez px ou em)'),
                    'name' => 'WFM_BANDEAU_PROMO_SIZE',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Taille police mobile (précisez px ou em)'),
                    'name' => 'WFM_BANDEAU_PROMO_SIZE_MOBILE',
                ),
                array(
                    'type' => 'color',
                    'size' => 30,
                    'label' => $this->l('Couleur police'),
                    'name' => 'WFM_BANDEAU_PROMO_COLOR',
                ),
                array(
                    'type' => 'color',
                    'size' => 30,
                    'label' => $this->l('Couleur police strong'),
                    'name' => 'WFM_BANDEAU_PROMO_COLOR_STRONG',
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save'),
            )
        );

        $fields_form[2]['form'] = array(
            'legend' => array(
                'title' => $this->l('PAR DEFAUT'),
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Texte bandeau'),
                    'name' => 'WFM_BANDEAU_PROMO_TEXT_DEFAULT',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Lien bandeau'),
                    'name' => 'WFM_BANDEAU_PROMO_LINK_DEFAULT',
                ),
                array(
                    'type' => 'color',
                    'size' => 30,
                    'label' => $this->l('Couleur Background'),
                    'name' => 'WFM_BANDEAU_PROMO_BACKGROUND_DEFAULT',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Taille police (précisez px ou em)'),
                    'name' => 'WFM_BANDEAU_PROMO_SIZE_DEFAULT',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Taille police mobile (précisez px ou em)'),
                    'name' => 'WFM_BANDEAU_PROMO_SIZE_MOBILE_DEFAULT',
                ),
                array(
                    'type' => 'color',
                    'size' => 30,
                    'label' => $this->l('Couleur police'),
                    'name' => 'WFM_BANDEAU_PROMO_COLOR_DEFAULT',
                ),
                array(
                    'type' => 'color',
                    'size' => 30,
                    'label' => $this->l('Couleur police strong'),
                    'name' => 'WFM_BANDEAU_PROMO_COLOR_STRONG_DEFAULT',
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save'),
            )
        );

        $helper = new HelperForm();

        // Module, token and currentIndex
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

        // Language
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;

        // Title and toolbar
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;        // false -> remove toolbar
        $helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
        $helper->submit_action = 'submit'.$this->name;
        $helper->toolbar_btn = array(
            'save' =>
                array(
                    'desc' => $this->l('Save'),
                    'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
                        '&token='.Tools::getAdminTokenLite('AdminModules'),
                ),
            'back' => array(
                'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
                'desc' => $this->l('Back to list')
            )
        );

        // Load current value
        $helper->fields_value['WFM_BANDEAU_PROMO_DATE_FROM'] = Configuration::get('WFM_BANDEAU_PROMO_DATE_FROM');
        $helper->fields_value['WFM_BANDEAU_PROMO_DATE_TO'] = Configuration::get('WFM_BANDEAU_PROMO_DATE_TO');
        $helper->fields_value['WFM_BANDEAU_PROMO_LINK'] = Configuration::get('WFM_BANDEAU_PROMO_LINK');
        $helper->fields_value['WFM_BANDEAU_PROMO_LINK_DEFAULT'] = Configuration::get('WFM_BANDEAU_PROMO_LINK_DEFAULT');
        $helper->fields_value['WFM_BANDEAU_PROMO_TEXT'] = Configuration::get('WFM_BANDEAU_PROMO_TEXT');
        $helper->fields_value['WFM_BANDEAU_PROMO_TEXT_DEFAULT'] = Configuration::get('WFM_BANDEAU_PROMO_TEXT_DEFAULT');
        $helper->fields_value['WFM_BANDEAU_PROMO_BACKGROUND'] = Configuration::get('WFM_BANDEAU_PROMO_BACKGROUND');
        $helper->fields_value['WFM_BANDEAU_PROMO_BACKGROUND_DEFAULT'] = Configuration::get('WFM_BANDEAU_PROMO_BACKGROUND_DEFAULT');
        $helper->fields_value['WFM_BANDEAU_PROMO_COLOR'] = Configuration::get('WFM_BANDEAU_PROMO_COLOR');
        $helper->fields_value['WFM_BANDEAU_PROMO_COLOR_DEFAULT'] = Configuration::get('WFM_BANDEAU_PROMO_COLOR_DEFAULT');
        $helper->fields_value['WFM_BANDEAU_PROMO_COLOR_STRONG'] = Configuration::get('WFM_BANDEAU_PROMO_COLOR_STRONG');
        $helper->fields_value['WFM_BANDEAU_PROMO_COLOR_STRONG_DEFAULT'] = Configuration::get('WFM_BANDEAU_PROMO_COLOR_STRONG_DEFAULT');
        $helper->fields_value['WFM_BANDEAU_PROMO_SIZE'] = Configuration::get('WFM_BANDEAU_PROMO_SIZE');
        $helper->fields_value['WFM_BANDEAU_PROMO_SIZE_DEFAULT'] = Configuration::get('WFM_BANDEAU_PROMO_SIZE_DEFAULT');
        $helper->fields_value['WFM_BANDEAU_PROMO_SIZE_MOBILE'] = Configuration::get('WFM_BANDEAU_PROMO_SIZE_MOBILE');
        $helper->fields_value['WFM_BANDEAU_PROMO_SIZE_MOBILE_DEFAULT'] = Configuration::get('WFM_BANDEAU_PROMO_SIZE_MOBILE_DEFAULT');

        return $helper->generateForm($fields_form);
    }

    /*public function setMedia()
	{
        parent::setMedia();
        $this->addJqueryPlugin(array('typewatch', 'fancybox', 'autocomplete'));
		$this->addJqueryUI('ui.datepicker');
	}*/

    public function hookDisplayBandeauTop()
    {
        $page_name = Dispatcher::getInstance()->getController();
        $this->assignSmartyValue();
        return $this->display(__FILE__, 'wfmbandeau.tpl');
    }

    public function hookHeader($params)
    {
        $this->assignSmartyValue();
        return $this->display(__FILE__, 'css.tpl');
    }

    public function assignSmartyValue()
    {
        $text = 'WFM_BANDEAU_PROMO_TEXT';
        $link = 'WFM_BANDEAU_PROMO_LINK';
        $background = 'WFM_BANDEAU_PROMO_BACKGROUND';
        $color = 'WFM_BANDEAU_PROMO_COLOR';
        $color_strong = 'WFM_BANDEAU_PROMO_COLOR_STRONG';
        $size = 'WFM_BANDEAU_PROMO_SIZE';
        $size_mobile = 'WFM_BANDEAU_PROMO_SIZE_MOBILE';

        $from_date = Configuration::get('WFM_BANDEAU_PROMO_DATE_FROM');
        $to_date = Configuration::get('WFM_BANDEAU_PROMO_DATE_TO');
        $from_date_array = new DateTime(Configuration::get('WFM_BANDEAU_PROMO_DATE_FROM'));
        $from_date = date_format($from_date_array, 'Y-m-d H:i:s');
        $to_date_array = new DateTime(Configuration::get('WFM_BANDEAU_PROMO_DATE_TO'));
        $to_date = date_format($to_date_array, 'Y-m-d H:i:s');
        $now = new DateTime('now');
        $now = date_format($now, 'Y-m-d H:i:s');
        $show = false;
        if ($from_date && $to_date) {
            if($from_date <= $now && $now <= $to_date){
                $text = $text;
                $link = $link;
                $background = $background;
                $color = $color;
                $color_strong = $color_strong;
                $size = $size;
                $size_mobile = $size_mobile;
            }
            else{
                $text = $text.'_DEFAULT';
                $link = $link.'_DEFAULT';
                $background = $background.'_DEFAULT';
                $color = $color.'_DEFAULT';
                $color_strong = $color_strong.'_DEFAULT';
                $size = $size.'_DEFAULT';
                $size_mobile = $size_mobile.'_DEFAULT';
            }
            $show = true;
        }
        $text = Configuration::get($text);
        $background = Configuration::get($background);
        $color = Configuration::get($color);
        $color_strong = Configuration::get($color_strong);
        $size = Configuration::get($size);
        $size_mobile = Configuration::get($size_mobile);
        $show = $show && $text;
        $link = Configuration::get($link);
        $link = str_replace('http://', 'https://', $link);
        $this->context->smarty->assign(array(
            'wfmbandeaupromo_show' => $show,
            'wfmbandeaupromo_text' => $text,
            'wfmbandeaupromo_link' => $link,
            'wfmbandeaupromo_background' => $background,
            'wfmbandeaupromo_color' => $color,
            'wfmbandeaupromo_color_strong' => $color_strong,
            'wfmbandeaupromo_size' => $size,
            'wfmbandeaupromo_size_mobile' => $size_mobile,
        ));
    }

    public function uploadFile($configuration_name)
    {
        if (isset($_FILES[$configuration_name])
            && isset($_FILES[$configuration_name]['tmp_name'])
            && !empty($_FILES[$configuration_name]['tmp_name'])
        ) {
            if ($error = ImageManager::validateUpload($_FILES[$configuration_name], 4000000)) {
                $output.=$this->displayError($this->l('Invalid image.'));
            } else {
                $ext = pathinfo($_FILES[$configuration_name]['name'], PATHINFO_EXTENSION);
                $file_name = md5($_FILES[$configuration_name]['name']).'.'.$ext;
                if (!move_uploaded_file($_FILES[$configuration_name]['tmp_name'], dirname(__FILE__).'/'.$file_name)) {
                    $output.=$this->displayError($this->l('An error occurred while attempting to upload the file.'));
                } else {
                    if (Configuration::hasContext($configuration_name, null, Shop::getContext())
                        && Configuration::get($configuration_name) != $file_name
                    ) {
                        @unlink(dirname(__FILE__).'/'.Configuration::get($configuration_name));
                    }
                    Configuration::updateValue($configuration_name, $file_name);
                }
            }
        }
    }
}
