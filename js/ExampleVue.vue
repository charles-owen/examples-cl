<template>
  <div class="content">
    <p>Example</p>
  </div>
</template>

<script>
	import UserVueBase from 'users-cl/js/Vue/UserVueBase.vue';

	export default {
		'extends': UserVueBase,
		props: ['json'],
		data: function() {
			return {

			}
		},
		mounted() {
			this.setTitle('Example Vue');
		},
		methods: {
		}
	}
</script>