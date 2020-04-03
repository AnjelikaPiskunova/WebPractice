<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ЗАдачи ES</title>


<script > // Задание 1
function getRandomInt(min, max) {
	return Math.floor(Math.random() * (max - min)) + min;
}
	let promise = new Promise(function (resolve, reject) {
		let waitTime = getRandomInt(1, 11);
		setTimeout(() => {
			if (waitTime <= 5) {
				resolve('result');
			}
			else if (waitTime > 5 && waitTime <= 10) {
				reject('error');
			}
		}, waitTime * 1000)})
	promise
	.then(
		result => { alert('Выполнено успешно'); },
		error => { alert('Опа Опа у вас тут ошибочка') });
</script>

<script> // Задание 2
let promise2 = new Promise(function (resolve, reject) { return resolve(2); });
promise2
.then(function (result) {
	return new Promise((resolve, reject) => {
		setTimeout(() => {
		resolve(result * result)}, 3000);
	})
})
.then(function (result) {
	return new Promise((resolve, reject) => {
	setTimeout(() => {
		resolve(result * result)}, 3000)
	})
})
.then(
function (result) {
	console.log(result);
})
</script>


<script>// Задание 3
function getRandomInt(min, max){
	return Math.floor(Math.random() * (max - min)) + min;
}
let prom1 = new Promise(function (resolve, reject){
	let waitTime = getRandomInt(1, 6);
	setTimeout(() =>{
	resolve(1); }, waitTime * 1000);
})

let prom2 = new Promise(function (resolve, reject){
	let waitTime = getRandomInt(1, 6);
		setTimeout(() =>{
		resolve(2); }, waitTime * 1000);
})

let prom3 = new Promise(function (resolve, reject){
	let waitTime = getRandomInt(1, 6);
	setTimeout(() =>{
		resolve(3); }, waitTime * 1000);
});

Promise.race([prom1, prom2, prom3]).then(function (val){
	alert(val);
})
</script>


<script> // Задание 4
function getRandomInt(min, max){
	return Math.floor(Math.random() * (max - min)) + min;
}
function getNum1(){
	return new Promise(function (resolve, reject){
		let randomNum = getRandomInt(1, 6);
		setTimeout(() =>{
			resolve(randomNum);}, 3000);
	})
}

function getNum2(){
	return new Promise(function (resolve, reject){
		let randomNum = getRandomInt(6, 11);
		setTimeout(() =>{
			resolve(randomNum);}, 5000); });
}

async function summa(){
	let result1 = await getNum1();
	let result2 = await getNum2();
	alert(result1 + result2);
}
	summa();
</script>


<script>// Задание 5

class Worker{
	constructor(name, surname, rate, days){
		this.name = name;
		this.surname = surname;
		this.rate = rate;
		this.days = days;
	}
	getSalary(){
		return this.rate * this.days;
	}
}
var worker = new Worker('Иван', 'Иванов', 10, 31);
	console.log(worker.name); 
	console.log(worker.surname); 
	console.log(worker.rate); 
	console.log(worker.days); 
	console.log(worker.getSalary()); 

	class Worker {
	constructor(name, surname, rate, days) {
		this._name = name;
		this._surname = surname;
		this._rate = rate;
		this._days = days;
	}

getName() {
	return this._name;
}

getSurname() {
	return this._surname;
}

getRate() {
	return this._rate;
}

getDays() {
	return this._days;
}

getSalary() {
	return this._rate * this._days;
}

}

var worker = new Worker('Иван', 'Иванов', 10, 31);
console.log(worker.getName()); 
console.log(worker.getSurname()); 
console.log(worker.getRate()); 
console.log(worker.getDays()); 
console.log(worker.getSalary());

class Worker {
	constructor(name, surname, rate, days) {
		this._name = name;
		this._surname = surname;
		this._rate = rate;
		this._days = days;
}

	getName() {
		return this._name;
	}

	getSurname() {
		return this._surname;
	}

	getRate() {
		return this._rate;
	}

	getDays() {
		return this._days;
	}

	getSalary() {
		return this._rate * this._days;
	}

	setRate(num) {
		return this._rate = num;
	}

	setDays(num) {
		return this._days = num;
	}
}

var worker = new Worker('Иван', 'Иванов', 10, 31);
console.log(worker.getRate());
console.log(worker.getDays()); 
console.log(worker.getSalary()); 
worker.setRate(20); 
worker.setDays(10); 
console.log(worker.getSalary()); 
</script>

</head>
<body>
</body>
</html>