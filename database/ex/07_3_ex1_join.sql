-- 조건 중 WHERE은 전체, HAVING은 GROUP BY, ON은 JOIN 에다가 줌

-- 0. JOIN이란?
-- 	두개 이상의 테이블을 묶어서 하나의 결과 집합으로 출력하는 것입니다.

-- **매우 중요!!! 1. INNER JOIN의 구조 (교집합)
--  	SELECT 컬럼1, 컬럼2
--  	FROM 테이블1 INNER JOIN 테이블2
--  		ON 조인 조건
--  	[WHERE 검색조건]
SELECT emp.emp_no
		, emp.first_name
		, emp.last_name
		, dp.dept_no
FROM employees emp 
	INNER JOIN dept_emp dp
		ON emp.emp_no = dp.emp_no
		AND dp.to_date >= NOW();
		
-- 2. **웬만하면 거의 안씀 OUTER JOIN :
-- 	- 기준이 되는 테이블의 레코드는 조인의 조건에 만족되지 않아고 출력
-- SELECT 컬럼1, 컬럼2 ...
-- FROM 테이블1
--  	[LEFT | RIGHT] OUTER JOIN 테이블2
-- 		ON 조인조건
-- WHERE 검색조건;
SELECT emp.emp_no
		, emp.first_name
		, dm.dept_no
FROM employees emp
	LEFT OUTER JOIN dept_manager dm
		ON emp.emp_no = dm.emp_no
		AND dm.to_date >= NOW()
WHERE emp.emp_no >= 110000;

-- ** 잘 안씀 3. UNION / UNION ALL :
-- 	- 두 쿼리의 결과를 합칩니다.
-- 	- UNION은 중복 값을 제거하고 출력하고, UNION ALL은 중복 값도 출력합니다.
-- SELECT ... FROM ...
-- UNION
-- SELECT ... FROM ...
-- 
-- SELECT ... FROM ...
-- UNION ALL
-- SELECT ... FROM ...
SELECT * FROM employees WHERE emp_no = 10001 OR emp_no = 10005
UNION ALL
SELECT * FROM employees WHERE emp_no = 10005;

-- ** 이런게 있다 알고만 있기 4. SELF JOIN : 자기 자신을 조인
-- SELECT 컬럼1, 컬럼2 ...
-- FROM 테이블1
-- 	INNER JOIN 테이블1
-- WHERE 검색조건;
-- 슈퍼바이저인 사원의 모든 정보를 출력해 주세요.
SELECT emp2.*
FROM employees emp1
	INNER JOIN employees emp2
		ON emp1.sup_no = emp2.emp_no;

ALTER TABLE employees ADD COLUMN sup_no INT(11);
