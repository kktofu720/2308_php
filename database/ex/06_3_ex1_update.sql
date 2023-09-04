-- UPDATE의 기본구조
-- UPDATE 테이블명
-- SET 컬럼1 = 값1, 컬럼2 = 값2
-- WHERE 조건 <- **매우 중요**
--  ** 추가설명 : 조건을 적지않을 경우 모든 레코드가 수정됩니다.
-- 				실수를 방지하기 위해 WHERE 절을 먼저 작성하고 SET 절을 작성하는 습관들이기

UPDATE titles
SET title = 'CEO'
WHERE emp_no = 500000;

SELECT * FROM titles WHERE emp_no = 500000;

-- 500000번 사원의 직급을 'Staff', 연봉을 '25000' 수정해주세요.
UPDATE titles
SET title = 'Sfaff'
WHERE emp_no = 500000;

UPDATE salaries
SET salary = 25000
WHERE emp_no = 500000;

SELECT * FROM titles WHERE emp_no = 500000;
SELECT * FROM salaries WHERE emp_no = 500000;

-- 500000번 사원의 직급을 'Technique Leader', 연봉을 '20000' 수정해주세요.
UPDATE titles
SET title = 'Technique Leader'
WHERE emp_no = 500000;

SELECT * FROM titles WHERE emp_no = 500000;
COMMIT;

UPDATE salaries
SET salary = 20000
WHERE emp_no = 500000;

SELECT * FROM salaries WHERE emp_no = 500000;
COMMIT;

