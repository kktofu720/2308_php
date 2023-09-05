-- 1. 데이터 타입 변환 함수
--    **둘 다 같은 기능을 합니다. **
--  	CAST(값 AS 데이터형식)
-- 	CONVERT(값, 데이터형식)
SELECT CAST(1234 AS CHAR(4));
SELECT CONVERT(1234, CHAR(4));

-- 2. 제어 흐름 함수
-- IF(수식, 참일 때, 거짓일 때) : 수식이 참 또는 거짓에 따라 결과를 분기하고 한다.
SELECT IF(0 = 1, '참', '거짓');

SELECT e.emp_no, IF(e.gender = 'M', '남자', '여자') AS gender
FROM employees e;

-- *중요 IFNULL(수식1, 수식2) : 수식1이 NULL이면 수식2를 반환하고, 수식1이  NULL이 아니면 수식1를 반환
SELECT IFNULL('11', '수식');

-- NULLIF(수식1, 수식2) : 수식1과 2가 같으면  NULL을 반환하고, 다르면 수식1을 반환합니다.
SELECT NULLIF(1,1);
SELECT NULLIF(1,2);

SELECT emp_no
	,title
	,to_date
	,NULLIF(to_date, 99990101) AS to_date2
FROM titles
ORDER BY emp_no DESC;

--  	**중요 CASE ~ WHEN ~ ELSE ~END : 다중 분기를 위해 사용합니다.
-- 		예)
-- 			CASE 체크하려는 수식1
-- 				WHEN 분기수식1 THEN 결과1
-- 				WHEN 분기수식2 THEN 결과2
-- 				WHEN 분기수식3 THEN 결과3
-- 				ELSE 결과4
-- 			END

SELECT e.emp_no
		, e.gender
		, CASE e.gender
			WHEN 'M' THEN '남자'
			ELSE '여자'
		END AS ko_gender
FROM employees AS e;

SELECT * FROM titles ORDER BY emp_no DESC;

-- 직책 테이블의 모든 정보를 출력해 주세요.
-- to_date가 null ||(or) 9999-01-01인 경우는 '현재직책'
-- 그 외는 '지금은아님'

SELECT *
		, CASE tit.to_date
			WHEN NULL THEN '현재직책'
			WHEN 99990101 THEN '현재직책'
			ELSE '지금은아님' 
		END AS ko_to_date
FROM titles tit
ORDER BY emp_no DESC;

SELECT *
		, CASE DATE(IFNULL(tit.to_date, 99990101))
			WHEN 99990101 THEN '현재직책'
			ELSE '지금은아님' 
		END AS ko_to_date
FROM titles tit
ORDER BY emp_no DESC;

SELECT *
FROM titles
WHERE to_date IS not NULL;


--  3. 문자열 함수
-- 	CONCAT(문자열1, 문자열2, ...) : 문자열을 이어줍니다.
SELECT CONCAT('안녕', '하세요.');
-- 	CONCAT_WS(구분자, 문자열1, 문자열2, ...) : 문자열 사이에 구분자를 넣어 이어줍니다.
SELECT CONCAT_WS('/','딸기','바나나','토마토','수박');
-- 	FORMAT(숫자, 소숫점 자릿수) : 숫자에 ','를 넣어주고, 소수점 자릿수까지 표현합니다.
SELECT FORMAT(123456,0);

-- 	LEFT(문자열, 길이) : 문자열을 왼쪽부터 길이만큼 잘라 반환합니다.
SELECT LEFT('123456', 2);
-- 	RIGHT(문자열, 길이) : 문자열을 오른쪽부터 길이만큼 잘라 반환합니다.
SELECT RIGHT('123456', 2);
-- 	UPPER(문자열) : 소문자를 대문자로 변경합니다.
SELECT UPPER('abcd');
-- 	LOWER(문자열) : 대문자를 소문자로 변경합니다.
SELECT LOWER('ABCD');

-- 	LPAD(문자열, 길이, 채울 문자열) : 문자열을 포함해 길이만큼 채울 문자열을 왼쪽에 넣습니다.
SELECT LPAD('123456', 10,'0');
-- 	RPAD(문자열, 길이, 채울 문자열) : 문자열을 포함해 길이만큼 채울 문자열을 오른쪽에 넣습니다.
SELECT RPAD('123456', 10,'0');

-- 	TRIM(문자열) : 좌우 공백을 제거합니다.
SELECT ' 1234 ', TRIM(' 1234 ');
-- 	LTRIM(문자열) : 왼쪽 공백을 제거합니다.
SELECT LTRIM(' 1234 ');
-- 	RTRIM(문자열) : 오른쪽 공백을 제거합니다.
SELECT RTRIM(' 1234 ');
-- 	**잘안씀  TRIM(방향 문자열1 FROM 문자열2) : 방향을 지정해 문자열2에서 문자열1을 제거합니다.
-- 		** 방향을 LEADING(좌), BOTH(좌우), TRAILING(우) **
SELECT TRIM(LEADING 'cde' FROM 'abcdefg');
-- 	SUBSTRING(문자열, 시작위치, 길이) : 문자열을 시작위치에서 길이만큼 잘라서 반환합니다.
SELECT SUBSTRING('abcdef', 3, 2);
--  	SUBSTRING_INDEX(문자열, 구분자, 횟수) : 왼쪽부터 구분자가 횟수 번째가 나오면 그 이후
SELECT SUBSTRING_INDEX('ab.cd.ef.gh', '.', 2);
SELECT SUBSTRING_INDEX('현희_HTML_CSS.html', '.', 1);


-- 4. 수학 함수
-- 	CELING(숫자) : 올림합니다.
SELECT CEILING(1.4);
-- 	FLOOR(숫자) : 버림합니다.
SELECT FLOOR(1.9);
-- 	ROUND(숫자) : 반올림합니다.
SELECT ROUND(1.5), ROUND(1.4);
-- 	*알기만하자 롤백X 싹 다 없어짐 TRUNCATE(숫자, 정수) : 소수점 기준으로 정수위치 까지 구하고 나머지는 버립니다.
SELECT TRUNCATE(1.11, 1);


-- 5. 날짜 및 시간 함수
-- 	NOW() : 현재 날짜/시간을 구합니다. (YYYY-MM-DD HH:MM:DD)
SELECT NOW(), DATE(NOW()), DATE(99990101);
--  	**자주씀 ADDDATE(날짜1, INTERVAL 날짜2) : 날짜1에서 날짜2를 더한 날짜를 구합니다.
SELECT ADDDATE(99990101, INTERVAL -1 DAY);
-- 	SUBDATE(날짜1, INTERVAL 날짜2) : 날짜1에서 날짜2를 뺀 날짜를 구합니다.
SELECT SUBDATE(99990101, INTERVAL 1 DAY);
-- 	ADDTIME(날짜/시간, 시간) : 날짜/시간에서 시간을 더한 날짜/시간을 구합니다.
SELECT ADDTIME(20230101000000, '-01:00:00');
-- 	**SUB는 굳이 안씀 SUBTIME(날짜/시간, 시간) : 날짜/시간에서 시간을 뺀 날짜/시간을 구합니다.
SELECT SUBTIME(20230101000000, '01:00:00');

SELECT ADDDATE(NOW(), INTERVAL -1 YEAR);
SELECT ADDDATE(DATE(NOW()), INTERVAL -1 YEAR);


--	6. 순위 함수
-- 	RANK() OVER(ORDER BY 속성명 DESC/ASC) : 순위를 매깁니다.
SELECT emp_no, salary, RANK() OVER(ORDER BY salary DESC) AS RANK 
FROM salaries
LIMIT 10;

--  	ROW_NUMBER() OVER(ORDER BY 속성명 DESC/ASC) : 레코드에 순위를 매깁니다.
SELECT emp_no, salary, ROW_NUMBER() OVER(ORDER BY salary DESC) AS num
FROM salaries
LIMIT 10;





 




