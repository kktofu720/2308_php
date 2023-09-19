
INSERT INTO employees
VALUE ( 
700000
,20000101
,'first'
,'last'
,'M'
,20230919
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
COMMIT;

SELECT * FROM titles WHERE emp_no = 700000;
-- ROLLBACK;