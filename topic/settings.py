# -*- coding: utf-8 -*-

# Scrapy settings for jiandan project

#

# For simplicity, this file contains only settings considered important or

# commonly used. You can find more settings consulting the documentation:

#

#http://doc.scrapy.org/en/latest/topics/settings.html

#http://scrapy.readthedocs.org/en/latest/topics/downloader-middleware.html

#http://scrapy.readthedocs.org/en/latest/topics/spider-middleware.html

BOT_NAME='jiandan'

SPIDER_MODULES=['jiandan.spiders']

NEWSPIDER_MODULE='jiandan.spiders'

ITEM_PIPELINES={

'jiandan.pipelines.JiandanPipeline':1,

}

IMAGES_STORE='E:'

DOWNLOAD_DELAY=0.25
