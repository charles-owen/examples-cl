import {PageVue} from 'site-cl/js/Vue/PageVue';
import PageNav from 'site-cl/js/Vue/PageNav.vue';
import ExampleVue from './ExampleVue.vue'

export const ExamplesFactory = function() {
}

ExamplesFactory.create = function(site) {

	site.ready(() => {
		PageVue.create('div.cl-example-vue', 'Example Vue', ExampleVue); // , PageNav); include if menu bar needed.
	});
}
