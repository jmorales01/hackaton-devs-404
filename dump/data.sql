INSERT INTO roles (role_name, created_by) VALUES
('Estudiante', 3),
('Profesor', 3),
('Administrador', 3);

INSERT INTO users (username, password, email, created_by) VALUES
('juan123', 'hashed_password_juan', 'juan@example.com', 3),
('maria456', 'hashed_password_maria', 'maria@example.com', 3),
('admin789', 'hashed_password_admin', 'admin@example.com', 3);

INSERT INTO user_roles (user_id, role_id, created_by) VALUES
(1, 1, 3), -- Juan es Estudiante
(2, 1, 3), -- Maria es Estudiante
(3, 3, 3); -- Admin es Administrador

INSERT INTO students (user_id, student_number, major, created_by) VALUES
(1, 'S12345', 'Ingeniería Informática', 3),
(2, 'S67890', 'Administración de Empresas', 3);

INSERT INTO skills (skill_name, created_by) VALUES
('Programación', 3),
('Gestión de Proyectos', 3),
('Análisis de Datos', 3);

INSERT INTO groups (group_name, created_by) VALUES
('Grupo A', 3),
('Grupo B', 3);

INSERT INTO activities (activity_name, description, due_date, created_by) VALUES
('Proyecto Final', 'Desarrollar una aplicación web completa', '2023-12-01', 3),
('Análisis de Mercado', 'Realizar un análisis de mercado para una startup', '2023-11-15', 3);

INSERT INTO courses (course_name, course_code, created_by) VALUES
('Programación en Python', 'CS101', 3),
('Gestión Empresarial', 'BUS202', 3);

INSERT INTO student_skills (student_id, skill_id, created_by) VALUES
(1, 1, 3), -- Juan tiene habilidades en Programación
(2, 2, 3); -- Maria tiene habilidades en Gestión de Proyectos

INSERT INTO group_members (group_id, student_id, created_by) VALUES
(1, 1, 3), -- Juan es miembro del Grupo A
(2, 2, 3); -- Maria es miembro del Grupo B

INSERT INTO course_enrollments (student_id, course_id, created_by) VALUES
(1, 1, 3), -- Juan matriculado en Programación en Python
(2, 2, 3); -- Maria matriculada en Gestión Empresarial

INSERT INTO course_enrollments (student_id, course_id, created_by) VALUES
(1, 1, 3), -- Juan matriculado en Programación en Python
(2, 2, 3); -- Maria matriculada en Gestión Empresarial

INSERT INTO people (first_name, last_name, date_of_birth, created_by) VALUES
('Juan', 'Perez', '2000-01-15', 3),
('Maria', 'Lopez', '1998-07-20', 3);
