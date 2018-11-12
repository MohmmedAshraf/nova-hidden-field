<template>
    <input :id="field.name" type="hidden" v-model="value" />
</template>

<script>
import { FormField } from 'laravel-nova'

export default {
    mixins: [FormField],

    props: ['resourceName', 'resourceId', 'field'],

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || ''
        },
    },
}
</script>
