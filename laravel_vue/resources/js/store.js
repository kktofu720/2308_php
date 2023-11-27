import { createStore } from 'vuex';

const store = createStore({
    state() {
        return  {
            testStr: 'store 테스트 str',
			laravelData: null, // 라라벨에서 받은 데이터 저장용
        }
    },

    mutations: {
		// 초기 데이터 셋팅(라라벨에서 받은)
        setLaravelData(state, data) {
			state.laravelData = data;
		}
    },

    actions: {


    }

});

export default store;