-- 부서번호가 'd010', 부서명이 'php504' 데이터 insert
FLUSH PRIVILEGES;
-- SELECT * FROM departments;
-- 1번
INSERT INTO employees (
		emp_no
		, birth_date
		, first_name
		, last_name
		, gender
		, hire_date
)
VALUES (
		500002
		, 19990326
		, 'minjoo'
		, 'KIM'
		, 'F'
		, 20230918
);

DELETE FROM employees
WHERE emp_no = 500002;
-- 2번 변경
-- UPDATE employees
-- SET first_name = '둘리'
-- WHERE emp_no = 500002;
-- 
-- UPDATE employees
-- SET last_name = '호이'
-- WHERE emp_no = 500002;


SELECT emp_no
FROM salaries
WHERE salary >= 100000
AND to_date >= NOW();

INSERT INTO employees
VALUE ( 
700000
,20000101
,'first'
,'last'
,'M'
,20230919
,NULL
);
COMMIT;

-- 1.titles 테이블에 데이터가 없는 사원을 검색
-- SELECT *
-- FROM employees emp
-- 	LEFT OUTER JOIN titles tit
-- 		ON emp.emp_no = tit.emp_no
-- WHERE tit.title IS NULL;	

SELECT * 
FROM employees emp
WHERE emp.emp_no NOT IN(SELECT emp_no FROM titles);	

-- 2. [1]번에 해당하는 사원의 직책 정보를 insert 
-- 2-1. 직책은 "green", 시작일은 현재시간, 종료일은 99990101

INSERT INTO titles (
	emp_no
	, title
	, from_date
	, to_date
)
VALUES (
	700000
	, 'green'
	, NOW()
	, 99990101
)
;
SELECT * FROM titles WHERE emp_no = 700000;
ROLLBACK;