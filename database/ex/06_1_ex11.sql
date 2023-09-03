-- titles 테이블에서 title 에 'staff'가 포함되어 있는 사람을 검색해주세요.
SELECT *
FROM titles
WHERE title LIKE('%staff%');

-- 성을 내림차순(desc)으로 정렬하고, 
-- 	이름을 오름차순(생략 또는 asc)으로 정렬하고, 
-- 		생일을 오름차순으로 정렬해 주세요.
SELECT *
FROM employees
ORDER BY last_name DESC, first_name, birth_date;


-- 현재 받고있는 급여만 조회해주세요.
SELECT *
FROM salaries
WHERE to_date >= 20230903;


-- 이름이 Mary인 사람의 수를 구해주세요.
SELECT COUNT(emp_no)
FROM employees
WHERE first_name = 'Mary';


-- **현재 재직중인 직원들의 직급별 수를 구해주세요.
SELECT title COUNT(title)
FROM titles
WHERE to_date >= 20230903
GROUP BY title HAVING title LIKE('%staff%');


-- 여자 사원의 사번, 생일, 풀네임을 풀네임 오름차순으로  출력해주세요.
SELECT emp_no
		,birth_date
		,CONCAT(first_name, ' ', last_name) AS full_name
FROM employees
WHERE gender = 'F'
ORDER BY full_name;


-- *재직중인 사원들 중 급여가 상위 5위까지 출력해 주세요.
SELECT *
FROM salaries
WHERE to_date >= 20230903
ORDER BY salary DESC
LIMIT 5;

-- *d002 부서의 현재 매니저의 정보를  가져오고 싶다.
SELECT *
FROM employees
WHERE emp_no = (
	SELECT emp_no
	FROM dept_manager
	WHERE dept_no = 'd002'
	  AND to_date >= 20230903
);

-- 현재 급여가 가장 높은 사원의 사번과 풀네임을 출력해주세요.
SELECT 
		emp_no
		, CONCAT(first_name, ' ', last_name) AS full_name
FROM employees
WHERE emp_no = (
	SELECT emp_no
	FROM salaries
	WHERE to_date >= 20230903
	ORDER BY salary DESC 
	LIMIT 1
);


-- **d001 부서에 속한 적이 있는 사원의 사번과 풀네임을 출력해주세요.
SELECT 
		emp_no
		, CONCAT(first_name, ' ', last_name) AS full_name
FROM employees
WHERE emp_no IN(
	SELECT emp_no
	FROM dept_emp
	WHERE dept_no = 'd001'
);


-- 현재 직책이 Senior Engineer인 사원의 사번과 생일을 출력해주세요.
SELECT 
		emp_no
		, birth_date
FROM employees
WHERE emp_no IN(
		SELECT emp_no
		FROM titles
		WHERE title = 'Senior Engineer'
			AND to_date >= 20230903
);
 

-- ***현재 부서장인 사람의 소속부서테이블의 모든 정보를 출력해주세요.
SELECT *
FROM dept_emp
WHERE (dept_no, emp_no) IN (
	SELECT dept_no, emp_no
	FROM dept_manager
	WHERE to_date >= NOW()
);

-- ***사원의 현재급여, 현재급여를 받기 시작한 일자, 풀네임을 출력해주세요.
SELECT 
	sal.salary
	, sal.from_date
	, (
		SELECT CONCAT(emp.first_name, ' ', emp.last_name) 
		FROM employees AS emp
		WHERE sal.emp_no = emp.emp_no	
	) AS full_name
FROM salaries AS sal
WHERE to_date >= NOW();