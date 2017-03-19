import * as types from './type'
import axios from 'axios'

const BASE_URL = 'http://www.web-jackiee.com/templets/blog/demo/publicRequest/financeCat/'
const REQUEST_URL = {
	BANNER  : BASE_URL + 'banner.php',
	PROJECT : BASE_URL + 'projectList.php'
}

export default{
	requestBanner:({commit},cb) => {
		axios
		 .get(REQUEST_URL.BANNER)
		 .then((res) => {
			commit(types.REQUEST_BANNER,res.data)
			cb && cb();
		})
	},
	requestProject : ({commit},cb) => {
		axios
		 .get(REQUEST_URL.PROJECT)
		 .then((res) => {
			commit(types.REQUEST_PROJECTlEST,res.data)
			cb && cb();
		})
	}
}

