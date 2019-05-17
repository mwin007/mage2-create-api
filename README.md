# mage2-api

# Instructions:
# 1.  Got to Magento's root and ppload to app/code directory, should look like app/code/Vexwire once completed.

# 2.  Run following CLI

php bin/magento setup:upgrade
php bin/magento cache:flush
php bin/magento indexer:reindex

# 3.  Check the database for following table, esn_table.


# 4.  Test with API testing software such as Postman.