// window._ = require('lodash');


// window.axios = require('axios');
//
// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Echo from 'laravel-echo';
import Larasocket from 'larasocket-js';

window.Echo = new Echo({
    broadcaster: Larasocket,
    token: process.env.MIX_LARASOCKET_TOKEN,
});
