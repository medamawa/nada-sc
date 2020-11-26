<template>
<div class="wrap">
<form  @submit.prevent="login()">
	<div>
		<label for="name">user name</label>
		<input id="name" name="name" type="text" required v-model="name">
	</div>
	<div>
		<label for="pass">pass</label>
		<input id="pass" name="pass" type="password" required v-model="pass">
	</div>
	<button type="submit">login</button>
</form>
</div>
</template>

<script>
import axios from "axios"

export default{
	data(){
		return {
			name: "",
			pass: "",
			pass_confirm: ""
		}
	},
	methods: {
		login: function(){
			axios.post('/login', {
				user_name: "test",
				password: "password",
			})
			.then(res => {
				console.log(res);
			});
		}
	}
}
</script>
<style lang="scss">
@import "../../sass/variables.scss";
@import "../../sass/style.scss";
</style>
