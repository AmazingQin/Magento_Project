/* --------------------- */
Project:	Magento Category and Product Pages
Developer:	Qin Liu
Date:		01/27/2016

/* --------------------- */
Installation:
Environment: XAMPP (Apache/2.4.17 (Win32) OpenSSL/1.0.2d PHP/5.6.15)
Follow the folder's paths and copy each documents into its associate directories in /htdocs/magento/

/* --------------------- */
Webpage Functionality:

This project assumes categories and products already exist in Magento Database.
This code will generate two pages. 1) Category Page & 2) Product Page.
The category page displays 2-layered categories that are active within database.
By clicking the name of each category, it will jump into the product page which displays all the products within that category.
The product page show the price, stock status, and image of each product. Jquery zooming effect is implements on the images.


/* --------------------- */
Files Description:

--app:
	--app/code/local/Mysite/Mycategory/: basic module components.
	--app/design/frontend/base/default/layout/local.xml: defines the package layout, handles, and block configurations.
	--app/design/frontend/base/default/template/: wrap up the view of blocks and PHP scripts.
	--app/etc/modules/Mysite_Mycategory.xml: project package registration.

--skin:
	--skin/frontend/rwd/default/js/: jquery supporting scripts
	
--category_page.png: snapshot of category page
--product_page.png: snapshot of product page


