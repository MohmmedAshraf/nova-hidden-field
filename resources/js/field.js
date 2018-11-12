Nova.booting((Vue, router) => {
    Vue.component('index-hidden-field', require('./components/IndexField'));
    Vue.component('detail-hidden-field', require('./components/DetailField'));
    Vue.component('form-hidden-field', require('./components/FormField'));
})
