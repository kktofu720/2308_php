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

