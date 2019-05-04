<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'WPGraphQL\\Extensions\\WooCommerce\\Actions' => $baseDir . '/src/class-actions.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Cart_Items' => $baseDir . '/src/connection/class-cart-items.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Coupons' => $baseDir . '/src/connection/class-coupons.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Customers' => $baseDir . '/src/connection/class-customers.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Order_Items' => $baseDir . '/src/connection/class-order-items.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Orders' => $baseDir . '/src/connection/class-orders.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Posts' => $baseDir . '/src/connection/class-posts.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Product_Attributes' => $baseDir . '/src/connection/class-product-attributes.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Products' => $baseDir . '/src/connection/class-products.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Refunds' => $baseDir . '/src/connection/class-refunds.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Shipping_Methods' => $baseDir . '/src/connection/class-shipping-methods.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Tax_Rates' => $baseDir . '/src/connection/class-tax-rates.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\Variation_Attributes' => $baseDir . '/src/connection/class-variation-attributes.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\WC_Connection' => $baseDir . '/src/connection/class-wc-connection.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Connection\\WC_Terms' => $baseDir . '/src/connection/class-wc-terms.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Cart_Item_Connection_Resolver' => $baseDir . '/src/data/connection/class-cart-item-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Coupon_Connection_Resolver' => $baseDir . '/src/data/connection/class-coupon-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Customer_Connection_Resolver' => $baseDir . '/src/data/connection/class-customer-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Order_Connection_Resolver' => $baseDir . '/src/data/connection/class-order-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Order_Item_Connection_Resolver' => $baseDir . '/src/data/connection/class-order-item-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Post_Connection_Resolver' => $baseDir . '/src/data/connection/class-post-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Product_Attribute_Connection_Resolver' => $baseDir . '/src/data/connection/class-product-attribute-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Product_Connection_Resolver' => $baseDir . '/src/data/connection/class-product-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Refund_Connection_Resolver' => $baseDir . '/src/data/connection/class-refund-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Shipping_Method_Connection_Resolver' => $baseDir . '/src/data/connection/class-shipping-method-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Tax_Rate_Connection_Resolver' => $baseDir . '/src/data/connection/class-tax-rate-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\Variation_Attribute_Connection_Resolver' => $baseDir . '/src/data/connection/class-variation-attribute-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\WC_Connection_Resolver' => $baseDir . '/src/data/connection/trait-wc-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Connection\\WC_Terms_Connection_Resolver' => $baseDir . '/src/data/connection/class-wc-terms-connection-resolver.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Factory' => $baseDir . '/src/data/class-factory.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Loader\\WC_Customer_Loader' => $baseDir . '/src/data/loader/class-wc-customer-loader.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Loader\\WC_Post_Crud_Loader' => $baseDir . '/src/data/loader/class-wc-post-crud-loader.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Data\\Mutation\\Cart_Mutation' => $baseDir . '/src/data/mutation/class-cart-mutation.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Filters' => $baseDir . '/src/class-filters.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Coupon' => $baseDir . '/src/model/class-coupon.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Crud_CPT' => $baseDir . '/src/model/class-crud-cpt.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Customer' => $baseDir . '/src/model/class-customer.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Order' => $baseDir . '/src/model/class-order.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Order_Item' => $baseDir . '/src/model/class-order-item.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Product' => $baseDir . '/src/model/class-product.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Product_Variation' => $baseDir . '/src/model/class-product-variation.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Refund' => $baseDir . '/src/model/class-refund.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Shipping_Method' => $baseDir . '/src/model/class-shipping-method.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Shop_Manager_Caps' => $baseDir . '/src/model/trait-shop-manager-caps.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Model\\Tax_Rate' => $baseDir . '/src/model/class-tax-rate.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Mutation\\Cart_Add_Item' => $baseDir . '/src/mutation/class-cart-add-item.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Mutation\\Cart_Remove_Item' => $baseDir . '/src/mutation/class-cart-remove-item.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Mutation\\Cart_Restore_Item' => $baseDir . '/src/mutation/class-cart-restore-item.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Backorders' => $baseDir . '/src/type/enum/class-backorders.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Catalog_Visibility' => $baseDir . '/src/type/enum/class-catalog-visibility.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Customer_Connection_Orderby_Enum' => $baseDir . '/src/type/enum/class-customer-connection-orderby-enum.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Discount_Type' => $baseDir . '/src/type/enum/class-discount-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Manage_Stock' => $baseDir . '/src/type/enum/class-manage-stock.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Order_Status' => $baseDir . '/src/type/enum/class-order-status.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Product_Types' => $baseDir . '/src/type/enum/class-product-types.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Stock_Status' => $baseDir . '/src/type/enum/class-stock-status.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Tax_Class' => $baseDir . '/src/type/enum/class-tax-class.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Tax_Rate_Connection_Orderby_Enum' => $baseDir . '/src/type/enum/class-tax-rate-connection-orderby-enum.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\Tax_Status' => $baseDir . '/src/type/enum/class-tax-status.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPEnum\\WC_Connection_Orderby_Enum' => $baseDir . '/src/type/enum/class-wc-connection-orderby-enum.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPInputObject\\Product_Attribute_Input' => $baseDir . '/src/type/input/class-product-attribute-input.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPInputObject\\Tax_Rate_Connection_Orderby_Input' => $baseDir . '/src/type/input/class-tax-rate-connection-orderby-input.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPInputObject\\WC_Connection_Orderby_Input' => $baseDir . '/src/type/input/class-wc-connection-orderby-input.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Cart_Type' => $baseDir . '/src/type/object/class-cart-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Coupon_Type' => $baseDir . '/src/type/object/class-coupon-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Customer_Address_Type' => $baseDir . '/src/type/object/class-customer-address-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Customer_Type' => $baseDir . '/src/type/object/class-customer-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Order_Item_Type' => $baseDir . '/src/type/object/class-order-item-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Order_Type' => $baseDir . '/src/type/object/class-order-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Product_Attribute_Type' => $baseDir . '/src/type/object/class-product-attribute-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Product_Download_Type' => $baseDir . '/src/type/object/class-product-download-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Product_Rating_Counter_Type' => $baseDir . '/src/type/object/class-product-rating-counter-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Product_Type' => $baseDir . '/src/type/object/class-product-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Product_Variation_Type' => $baseDir . '/src/type/object/class-product-variation-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Refund_Type' => $baseDir . '/src/type/object/class-refund-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Shipping_Method_Type' => $baseDir . '/src/type/object/class-shipping-method-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Tax_Rate_Type' => $baseDir . '/src/type/object/class-tax-rate-type.php',
    'WPGraphQL\\Extensions\\WooCommerce\\Type\\WPObject\\Variation_Attribute_Type' => $baseDir . '/src/type/object/class-variation-attribute-type.php',
    'WP_GraphQL_WooCommerce' => $baseDir . '/src/class-wp-graphql-woocommerce.php',
);
