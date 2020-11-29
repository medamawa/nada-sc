<template>
<div class="wrap">
<form  @submit.prevent="register()">
	<div>
		<label for="name">user name</label>
		<input id="name" name="name" type="text" required v-model="name">
	</div>
	<div>
		<label for="email">email</label>
		<input id="email" name="email" type="text" required v-model="email">
	</div>
	<div>
		<label for="name">role</label>
		<select id="role" name="role" type="text" required v-model="role">
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
		</select>
	</div>
	<div>
		<label for="pass">pass</label>
		<input id="pass" name="pass" type="password" required v-model="pass">
	</div>
	<div>
		<label for="pass_confirm">pass_confirm</label>
		<input id="pass_confirm" name="pass_confirm" type="password" required v-model="pass_confirm">
	</div>
	<button type="submit">register</button>
</form>
</div>
</template>

<script>
import axios from "axios"

export default{
	data(){
		return {
			name: "",
			email: "",
			role: "",
			pass: "",
			pass_confirm: ""
		}
	},
	methods: {
		register: function(){
			const form = document.querySelector("form");
			const element = document.getElementById("pass");
			axios.post('/register', {
				user_name: this.name,
				name: this.name,
				password: this.pass,
				role: this.role,
				email: this.email,
			})
			.then(res => {
				axios.post('/login', {
					user_name: this.name,
					name: this.name,
					password: this.email,
					role: this.role,
					email: this.email,
					remember: "true"
				}).then
				(res => {
					console.log(res);
				})
			});
		}
	}
}
</script>
<style lang="scss">
@import "../../sass/variables.scss";
@import "../../sass/style.scss";
</style>
