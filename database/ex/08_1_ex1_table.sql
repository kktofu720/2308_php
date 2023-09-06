-- 1.  테이블 생성
-- CREATE TABLE 테이블명(
-- 	컬럼 타입(크기) NOT NULL --널값이 들어갈 수 없음
-- 	,컬럼 타입 DEFAULT(값) --초기값 지정
-- 	,CONSTRAIN PK명 PRIMARY KEY(컬럼) --PK설정
-- 	,CONSTRAIN FK명 FOREIGN KEY(컬럼)
-- 		REFERENCE 참조테이블(참조컬럼) [ON DELETE 동작 / ON UPDATE 동작]  -- FK설정
-- 	,CONSTRAIN UNIQUE명 UNIQUE (컬럼) -- UNIQUE설정
-- 	,CONSTRAIN CHECK명 CHECK (조건) -- CHECK설정
-- );

CREATE TABLE members (
	mem_no INT PRIMARY KEY AUTO_INCREMENT
	,id VARCHAR(30) UNIQUE NOT NULL 
	,mem_name VARCHAR(30) NOT NULL 
	,addr VARCHAR(100) NOT NULL
);

CREATE TABLE points (
	mem_no INT PRIMARY KEY 
	,pt INT NOT NULL DEFAULT(0)
	,CONSTRAINT fk_points_mem_no FOREIGN KEY(mem_no)
		REFERENCES members(mem_no) ON DELETE CASCADE
);

CREATE TABLE order_list (
	order_no INT PRIMARY KEY
	,mem_no INT NOT NULL 
	,goods_no INT NOT NULL 
	,goods_cnt INT NOT NULL 
	,total_pay INT NOT NULL 
	,CONSTRAINT fk_order_list_mem_no FOREIGN KEY(mem_no)
		REFERENCES members(mem_no) ON DELETE CASCADE
	,CONSTRAINT fk_order_list_goods_no FOREIGN KEY(goods_no)
		REFERENCES goods_list(goods_no) ON DELETE NO ACTION 
); 

CREATE TABLE goods_list (
	goods_no INT PRIMARY KEY
	,goods_name VARCHAR(50) NOT NULL 
	,goods_price INT NOT NULL 
);

INSERT INTO members(id, mem_name, addr)
VALUES('admin', 'tofu', 'korea deagu');

INSERT INTO points(mem_no)
VALUES(2);


-- 2. 테이블 변경
-- 	- 컬럼 추가
-- 		ALTER TABLE 테이블명 ADD COLUMN 컬럼 데이터타입;
-- 	- 컬럼의 데이터타입 변경
-- 		ALTER TABLE 테이블명 ALTER COLUMN 컬럼 데이터타입;
-- 	- 컬럼 삭제
-- 		ALTER TABLE 테이블명 DROP COLUMN 컬럼;

ALTER TABLE members ADD COLUMN age INT NOT NULL;
ALTER TABLE members MODIFY COLUMN mem_name VARCHAR(50) NOT NULL; 
ALTER TABLE members DROP COLUMN age;

-- 3. 테이블 삭제
-- 	DROP TABLE 테이블1 [, 테이블2, 테이블3 ...]
DROP TABLE points;

-- 4. 테이블의 데이터 삭제
--  	TRUNCATE TABLE 테이블;
DELETE FROM members WHERE mem_no = 1;
ROLLBACK; 
-- TRUNCATE TABLE members;