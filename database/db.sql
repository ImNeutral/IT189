DROP TABLE IF EXISTS rank_categories;
CREATE TABLE rank_categories (
  id              INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  rank_category VARCHAR(50) NOT NULL
);

DROP TABLE IF EXISTS degree_categories;
CREATE TABLE degree_categories (
  id              INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  degree          VARCHAR(100) NOT NULL

);


DROP TABLE IF EXISTS employees;
CREATE TABLE employees (
  id              INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  for_rank_category_id  INT NOT NULL,
  faculty_id      VARCHAR(20) NOT NULL,
  eval_date       DATE,
  faculty_name    VARCHAR(100) NOT NULL,
  highest_educational_attainment VARCHAR(50),
  specialization  VARCHAR(100),
  college         VARCHAR(100),
  department      VARCHAR(100),
  current_rank    VARCHAR(100),

  CONSTRAINT employees_rank_category_id
    FOREIGN KEY(for_rank_category_id) REFERENCES rank_categories(id)
      ON UPDATE CASCADE
        ON DELETE RESTRICT
);

DROP TABLE IF EXISTS educational_attainment;
CREATE TABLE educational_attainment (
  id                  INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  employee_id         INT NOT NULL,
  degree_category_id  INT NOT NULL,
  degree_earned       VARCHAR(100),
  school              VARCHAR(150),
  date                DATE,
  evaluators_remarks  VARCHAR(150)
);