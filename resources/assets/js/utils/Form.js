import Errors from '../utils/Errors.js';
class Form {

	constructor(data) {

		this.originalData = data;

		for (let field in data) {
			this[field] = data[field];
		};

		this.errors = new Errors();

	};

	data() {

		let data = {};

		for(let prop in this.originalData) {
			data[prop] = this[prop];
		}

		// let data = Object.assign({}, this);

		// delete data.originalData;
		// delete data.errors;

		return data;
	}

	reset() {

		for (let field in this.originalData) {
			this[field] = '';
		}

		this.errors.clear();


	};

	submit(requestType, url) {
		
		return new Promise((resolve, reject) => {
			axios[requestType](url, this.data())
			  .then(response =>{
			  	this.onSuccess(response.data);
			  	resolve(response.data);
			  })
			  .catch(error => {
			  	this.onError(error.response.data);

			  	reject(error.response.data);
			  });
		});

		

	};

	onSuccess(data) {
		//this.add(data);
		console.log(data);
		this.reset();
	};

	onError(errors) {
		this.errors.record(errors);
	};
};

export default Form;