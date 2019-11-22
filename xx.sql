CREATE TABLE video_data(
	video_id int AUTO_INCREMENT PRIMARY KEY,
    subject VARCHAR(50),
    description VARCHAR(255),
    video_path VARCHAR(255),
    dummy_path VARCHAR(255)
);

insert into video_data(subject,description,video_path,dummy_path) 
values("Maths", "Learn About Maths", "math1.mp4","math1.jpg");