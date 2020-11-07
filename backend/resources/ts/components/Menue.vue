<template>
	<div class="menue-wrap"> 
		<div class="column-top">
			{{ topstring }}
		</div>
		<div class="column" v-for="column in columns">
			<a :href="column.link">{{ column.text }}</a>
		</div>
	</div>
</template>

<script>
export default {
	props: ["topstring", "columnlink", "columnstring"],
	data() {
		return {
			columns: {}
		}
	},
	mounted: function(){
		const columnstring = this.columnstring.replace(/[\[\]]/g, "").split(",");
		const columnlink = this.columnlink.replace(/[\[\]]/g, "").split(",");
		const length = columnlink.length;
		this.columns = [...Array(length).keys()].map(i => {
			return {text: columnstring[i], link: columnlink[i]}
		});
	}
}
</script>
<style lang="scss">
@import "../../sass/variables.scss";
$rad1: 6px;

.menue-wrap {
	width: 15vw;
	border-radius: $rad1;
	box-shadow: 0 0 4px rgba(0, 0, 0, 0.3);
	.column-top {
		background: $deep-blue;
		color: white;
		border-top-left-radius: $rad1;
		border-top-right-radius: $rad1;
		display: flex;
		height: 2.5rem;
		font-size: 1.5rem;
		font-weight: 200;
		justify-content: center;
		align-items: center;
	}
	.column {
		font-size: 1.2rem;
		height: 2.5rem;
		border-bottom: 1px solid #dddddb;
		display: flex;
		justify-content: center;
		align-items: center;
		font-weight: 300;
		a {
			color: $text-color;
			text-decoration: none;
			&:hover {
				color: $text-color;
				text-decoration: none;
			}
			&:visited {
				color: $text-color;
				text-decoration: none;
			}
			&:link {
				color: $text-color;
				text-decoration: none;
			}
			&:active {
				color: $text-color;
				text-decoration: none;
			}
		}
	}
}
</style>
