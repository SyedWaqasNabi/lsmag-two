
var config = {
    map: {
<<<<<<< HEAD
        '*': {
            'lsomni/map-loader' : 'Ls_Omni/js/map-loader',
            'lsomni/stores-provider' : 'Ls_Omni/js/model/stores-provider',
            'lsomni/map' : 'Ls_Omni/js/view/map',
            'lsomni/stock':'Ls_Omni/js/view/product',
            'Magento_Checkout/js/model/shipping-save-processor/default': 'Ls_Omni/js/model/shipping-save-processor/default'
        }
=======
       '*': {
           'lsomni/map-loader' : 'Ls_Omni/js/map-loader',
           'lsomni/stores-provider' : 'Ls_Omni/js/model/stores-provider',
           'lsomni/map' : 'Ls_Omni/js/view/map',
           'lsomni/stock':'Ls_Omni/js/view/product',
           'Magento_Checkout/js/model/shipping-save-processor/default': 'Ls_Omni/js/model/shipping-save-processor/default'
       }
>>>>>>> master
    },
    config: {
        mixins: {
            'Magento_Checkout/js/view/shipping': {
                'Ls_Omni/js/view/plugin/shipping': true
            }
        }
    }
};