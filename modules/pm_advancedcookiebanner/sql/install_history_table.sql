CREATE TABLE IF NOT EXISTS `PREFIX_pm_advancedcookiebanner_consent` (
    `id_customer` int(10) unsigned NOT NULL,
    `id_guest` int(10) unsigned NOT NULL,
    `consent` int(1) NOT NULL,
    `date_add` datetime NOT NULL,
    PRIMARY KEY (`id_customer`, `id_guest`, `date_add`)
) ENGINE = MYSQL_ENGINE DEFAULT CHARSET = utf8;
