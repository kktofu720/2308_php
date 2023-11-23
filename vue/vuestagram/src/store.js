import { createStore } from 'vuex';
import axios from 'axios';

const store = createStore({
	// state() : data를 저장하는 영역
	state() {
		return {
			boardData: [], // 게시글을 저장하는 용도
			flgTabUI: 0, // 탭ui용 플래그
			imgURL: '', // 작성 탭 표시용 이미지 URL 저장용
			postFileData: null, // 글 작성 파일데이터 저장용 
			lastBoardId: 0, // 가장 마지막 로드 된 게시글 번호 저장용
			flgBtnMoreView: true, // 더보기 버튼 활성여부 플래그
		}
	},

	// mutations : 데이터 수정용 함수 저장 영역
	// store 안에 있는 state와 mutations에 있는 state는 같다.
	// unshift : unshift.변수명('추가값') - 변수명 맨 앞에 추가값(배열값) 추가
	// push : push.변수명('추가값') - 변수명 맨 뒤에 추가값(배열값) 추가
	mutations: {
		setBoardList(state, data) {
			state.boardData = data;
			this.commit('setLastBoardId', data[data.length - 1].id);
		},
		// 마지막 게시글 번호 셋팅용
		setLastBoardId(state, num) {
			state.lastBoardId = num;
		},
		// 탭ui 셋팅용
		setFlgTabUI(state, num) {
			state.flgTabUI = num;
		},
		// 작성 탭 표시용 이미지 URL 셋팅용
		setImgURL(state, url) {
			state.imgURL = url;
		},
		// 글 작성 파일데이터 셋팅용
		setPostFileData(state, file) {
			state.postFileData = file;
		},
		// 작성 된 글 삽입용
		setUnshiftBoard(state, data) {
			state.boardData.unshift(data);
		},
		// 작성 후 초기화 처리
		setClearAddData(state) {
			state.imgURL = '';
			this.commit('setPostFileData', null);
			// state.postFileData = null;
		},
		// 더보기 버튼 누르면 글 더 보이기
		setMoreBoardList(state, data) {
			state.boardData.push(data);
			// state.lastBoardId = state.boardData[state.boardData.length - 1].id;
		},
		// 더보기 버튼 활성화
		setFlgBtnMoreView(state, boo) {
			state.flgBtnMoreView = boo;
		}
	},

	// actions : ajax로 서버에 데이터를 요청할 때나 시간 함수등 비동기 처리는 actions에 정의
	actions: {
		// 초기 게시글 데이터 획득 ajax처리
		// context는 이름 고정, state에있는 데이터에 접근할 수 있는 파라미터
		actionGetBoardList(context) {
			const url = 'http://112.222.157.156:6006/api/boards';
			const header = {
				headers: {
					'Authorization': 'Bearer meerkat'
				}
			};
			axios.get(url, header)
			.then(res => {
				// mutations에 접근
				context.commit('setBoardList', res.data);
			})
			.catch(err => {
				console.log(err);
			});
		},
		// 글 작성 처리
		actionPostBoardAdd(context) {
			const url = 'http://112.222.157.156:6006/api/boards';
			const header = {
				headers: {
					'Authorization': 'Bearer meerkat',
					'Content-Type': 'multipart/form-data',
				}
			};
			const data = {
				name: '김민주',
				img: context.state.postFileData,
				content: document.getElementById('content').value,
			};

			axios.post(url, data, header)
			.then(res => {
				// 작성글 데이터 저장
				context.commit('setUnshiftBoard', res.data);

				// 리스트 UI로 전환
				context.commit('setFlgTabUI', 0);

				// 작성 후 초기화 처리
				context.commit('setClearAddData');
			})
			.catch(err => {
				console.log(err);
			});
		},
		//
		actionGetBoardShow(context) {
			const url = 'http://112.222.157.156:6006/api/boards/' + context.state.lastBoardId;
			const header = {
				headers: {
					'Authorization': 'Bearer meerkat',
				}
			};
			axios.get(url, header)
			.then(res => {
				// 빈 게시글이 뜨는 것을 막음
				if(res.data) {
					// 데이터 있을 경우
					context.commit('setMoreBoardList', res.data);
					context.commit('setLastBoardId', res.data.id);
				} else {
					// 데이터 없을 경우
					context.commit('setFlgBtnMoreView', false);
				}
			})
			.catch(err => console.log(err.response.data))

		}

	}	
});

export default store;