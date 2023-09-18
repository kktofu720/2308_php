SELECT
		sal.salary 
		, emp.emp_no
		, emp.birth_date
FROM employees emp
	 JOIN salaries sal
		ON emp.emp_no = sal.emp_no
		AND emp.emp_no IN(10001, 10002)
		AND sal.to_date >= NOW();