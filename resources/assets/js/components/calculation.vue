<template>
	<div>
		<div class="calcField">
		<h2>計算式を入力してください</h2>
			<input type="text" v-model="formula">={{ result }}<br>
			<button v-on:click="addHistory">履歴に追加</button>
		</div>
		<div class="historyField">
			<h2>計算履歴</h2>
			<div v-for="(history, index) in histories">{{ history.formulaHistory }}={{ history.resultHistory}}
				<button v-on:click="formula=histories[index].formulaHistory">再計算</button>
				<button v-on:click="histories.splice(index, 1)">履歴削除</button>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	data () {
		return {
			formula:"1+1",
			histories: [
				{formulaHistory:'1+1',resultHistory:'2'},
				{formulaHistory:'1+3',resultHistory:'4'}
			],
			results:[]
		}
	},
	computed: {
		result : function () {
			return eval(this.formula)
		}
	},
	methods: {
		addHistory: function() {
			this.histories.push({formulaHistory: this.formula,resultHistory: this.result})
		},
		backToText: function() {
			this.formula = this.histories.index;
		}
	}
}
</script>
