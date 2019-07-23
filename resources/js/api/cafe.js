// Imports the Roast API URL from the config

import { ROAST_CONFIG } from '../config.js';
import Axios from 'axios';

export default {

    // Get Cafes (in vuex, call this api request as an action)
    getCafes: function() {
        return axios.get( ROAST_CONFIG.API_URL + '/cafes' );
    },

    //Get Cafe
    getCafe: function( cafeID ) {
        return axios.get( ROAST_CONFIG.API_URL + '/cafes/' + cafeID);
    },

    // Add New Cafe
    postAddNewCafe: function( name, address, city, state, zip ) {
        return axios.post( ROAST_CONFIG.API_URL + '/cafes/',
            {
                name: name,
                address: address,
                city: city,
                state: state,
                zip: zip,
            }
        )
    } 

}