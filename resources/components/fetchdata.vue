<template>
	<div id="app"></div>
</template>
<script>
	import axios from 'axios';
	axios.get('/print-response')
	  .then(function (response) {
	    console.log(response);
	  })
	export default {
		data(){
			return{
				show:null
			}
		}
	}
</script>