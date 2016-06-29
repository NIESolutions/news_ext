CREATE TABLE tx_news_domain_model_news (
 subtitle varchar(255) DEFAULT '' NOT NULL,
 link varchar(255) DEFAULT '' NOT NULL,
 iswebsite int(11) unsigned DEFAULT '0' NOT NULL,
 ismobile int(11) unsigned DEFAULT '0' NOT NULL,
 istablet int(11) unsigned DEFAULT '0' NOT NULL,
 isdesktop int(11) unsigned DEFAULT '0' NOT NULL,
);