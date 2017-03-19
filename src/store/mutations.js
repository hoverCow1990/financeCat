import {
	REQUEST_BANNER,
	REQUEST_PROJECTlEST,
} from './type'

const state = {
	admin : {
		balance : 0,
	},
	banner : [],
	projectList : [],
};

const mutations = {
	//请求banner信息
	[REQUEST_BANNER](state,data){
		state.banner = data;
	},
	[REQUEST_PROJECTlEST](state,data){
		state.projectList = data;
	}
};

const getters={
	getBanner(){
		return state.banner;
	},
	getBalance(){
		return state.admin.balance;
	},
	getProjects(){
		return state.projectList;
	}
};

export default{
	state,
	mutations,
	getters
}
