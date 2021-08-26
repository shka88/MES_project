CREATE TABLE `관리` (
	`권한정보`	varchar(30)	NULL,
	`사원번호`	varchar(12)	NOT NULL,
	`부서명`	enum('영업팀', '공정1팀', '공정2팀', '자재1팀', '자재2팀')	NOT NULL,
	`직원ID`	varchar(18)	NULL,
	`비밀번호`	varchar(18)	NULL
);

CREATE TABLE `사원정보` (
	`사원번호`	varchar(12)	NOT NULL,
	`부서명`	enum('영업팀', '공정1팀', '공정2팀', '자재1팀', '자재2팀')	NOT NULL,
	`이름`	varchar(20)	NULL,
	`직책`	varchar(10)	NULL,
	`연락처`	varchar(16)	NULL
);

CREATE TABLE `생산 공정 정보` (
	`공정명`	varchar(50)	NOT NULL,
	`담당자명`	varchar(10)	NULL,
	`부서명`	enum('영업팀', '공정1팀', '공정2팀', '자재1팀', '자재2팀')	NOT NULL,
	`사원번호`	varchar(12)	NOT NULL,
	`연락처`	varchar(16)	NULL
);

CREATE TABLE `생산 의뢰 현황(계획)` (
	`의뢰코드`	varchar(30)	NULL,
	`수주업체명`	varchar(18)	NOT NULL,
	`품목명`	varchar(18)	NOT NULL,
	`생산기한`	date	NULL,
	`수량`	int	NULL
);

CREATE TABLE `생산 현황일지` (
	`일자`	date	NOT NULL,
	`의뢰코드`	varchar(30)	NULL,
	`수주업체명`	varchar(18)	NOT NULL,
	`품목명`	varchar(18)	NOT NULL,
	`수량`	int	NULL
);

CREATE TABLE `품목정보` (
	`품목명`	varchar(18)	NOT NULL,
	`품목코드`	varchar(18)	NULL
);

CREATE TABLE `필요자재 발주 현황` (
	`발주업체명`	varchar(18)	NOT NULL,
	`의뢰코드`	varchar(30)	NULL,
	`공정명`	varchar(50)	NOT NULL,
	`자재이름`	varchar(18)	NULL,
	`발주수량`	int	NULL
);

CREATE TABLE `보유자재 현황` (
	`자재이름`	varchar(18)	NULL,
	`재고수량`	int	NULL,
	`위치`	varchar(30)	NULL
);

CREATE TABLE `자재정보` (
	`자재이름`	varchar(18)	NULL,
	`자재코드`	varchar(30)	NULL,
	`분야`	varchar(10)	NULL,
	`규격`	varchar(30)	NULL,
	`평가기관`	varchar(18)	NULL,
	`업체명`	varchar(10)	NULL
);

CREATE TABLE `자재 입고 내역` (
	`자재이름`	varchar(18)	NULL,
	`입고일자`	date	NULL,
	`수량`	int	NULL,
	`창고위치`	varchar(30)	NULL
);

CREATE TABLE `수주처` (
	`수주업체명`	varchar(18)	NOT NULL,
	`업체코드`	varchar(18)	NULL,
	`연락처`	varchar(16)	NULL
);

CREATE TABLE `자재 출고 내역` (
	`자재이름`	varchar(18)	NULL,
	`출고일자`	date	NULL,
	`Field3`	int	NULL
);

CREATE TABLE `부서정보` (
	`부서명`	enum('영업팀', '공정1팀', '공정2팀', '자재1팀', '자재2팀')	NOT NULL,
	`부서코드`	varchar(30)	NULL,
	`사용유무`	enum('사용','미사용')	NULL
);

CREATE TABLE `발주처` (
	`발주업체명`	varchar(18)	NOT NULL,
	`업체코드`	varchar(18)	NULL,
	`연락처`	varchar(16)	NULL
);

CREATE TABLE `생산품 수주 관리` (
	`의뢰코드`	varchar(30)	NULL,
	`수주업체명`	varchar(18)	NOT NULL,
	`품목명`	varchar(18)	NOT NULL,
	`발주일자`	date	NULL,
	`수량`	int	NULL,
	`공급가액`	int	NULL,
	`세액`	int	NULL
);

CREATE TABLE `공정 필요 자재` (
	`공정명`	varchar(50)	NOT NULL,
	`자재이름`	varchar(18)	NULL,
	`자재수량`	int	NULL
);

ALTER TABLE `생산 공정 정보` ADD CONSTRAINT `FK_관리_TO_생산 공정 정보_1` FOREIGN KEY (
	`부서명`
)
REFERENCES `관리` (
	`부서명`
);

ALTER TABLE `생산 공정 정보` ADD CONSTRAINT `FK_관리_TO_생산 공정 정보_2` FOREIGN KEY (
	`사원번호`
)
REFERENCES `관리` (
	`사원번호`
);

ALTER TABLE `생산 현황일지` ADD CONSTRAINT `FK_생산품 수주 관리_TO_생산 현황일지_1` FOREIGN KEY (
	`의뢰코드`
)
REFERENCES `생산품 수주 관리` (
	`의뢰코드`
);

ALTER TABLE `생산 현황일지` ADD CONSTRAINT `FK_생산품 수주 관리_TO_생산 현황일지_2` FOREIGN KEY (
	`수주업체명`
)
REFERENCES `생산품 수주 관리` (
	`수주업체명`
);

ALTER TABLE `생산 현황일지` ADD CONSTRAINT `FK_생산품 수주 관리_TO_생산 현황일지_3` FOREIGN KEY (
	`품목명`
)
REFERENCES `생산품 수주 관리` (
	`품목명`
);

ALTER TABLE `필요자재 발주 현황` ADD CONSTRAINT `FK_공정 필요 자재_TO_필요자재 발주 현황_1` FOREIGN KEY (
	`공정명`
)
REFERENCES `공정 필요 자재` (
	`공정명`
);

ALTER TABLE `필요자재 발주 현황` ADD CONSTRAINT `FK_공정 필요 자재_TO_필요자재 발주 현황_2` FOREIGN KEY (
	`자재이름`
)
REFERENCES `공정 필요 자재` (
	`자재이름`
);

ALTER TABLE `자재 입고 내역` ADD CONSTRAINT `FK_보유자재 현황_TO_자재 입고 내역_1` FOREIGN KEY (
	`자재이름`
)
REFERENCES `보유자재 현황` (
	`자재이름`
);

ALTER TABLE `자재 출고 내역` ADD CONSTRAINT `FK_보유자재 현황_TO_자재 출고 내역_1` FOREIGN KEY (
	`자재이름`
)
REFERENCES `보유자재 현황` (
	`자재이름`
);

