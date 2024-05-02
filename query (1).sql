CREATE TABLE AboutDescription (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description VARCHAR(2550),
    imgSource VARCHAR(255)
);
CREATE TABLE ContactInformations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    telnumber VARCHAR(255),
    address VARCHAR(255)
);
CREATE TABLE PrestationsList (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description VARCHAR(2550),
    price DOUBLE,
    salon VARCHAR(255),
    prestation VARCHAR(255),
    duration VARCHAR(10)
);

INSERT INTO AboutDescription (title, description, imgSource) VALUES 
("Welcome to Tozsér Éva's Lash Haven", "Indulge in the artistry of eyelashes at Tozsér Éva's salon. Our skilled technicians, led by the visionary Tozsér Éva herself, craft unique lash designs to enhance your natural beauty. Discover a world where every blink tells a story.", "./images/picture2.jpg"),
("Bespoke Lash Elegance", "At Tozsér Éva's, we believe in personalized beauty. Our lash experts take the time to understand your style and preferences, creating bespoke designs that accentuate your eyes. Experience the allure of custom-crafted lash elegance.", "./images/picture3.jpg"),
("Luxury Redefined", "Step into the lap of luxury at Tozsér Éva's salon. Our lavish decor and relaxing ambiance create the perfect setting for your lash transformation. Immerse yourself in a world where sophistication meets unparalleled eyelash artistry.", "./images/picture4.jpg");

INSERT INTO ContactInformations (telnumber, address) VALUES
("+12 34 56 78 9", "--Address, Hungary--");

INSERT INTO PrestationsList (title, description, price, salon, prestation, duration) VALUES 
("Eyelash Extension", "<b>Eyelash extensions</b>, a beauty breakthrough, provide a customizable solution for <i>fuller lashes</i>. Expertly applied, individual synthetic or natural fibers adhere seamlessly to natural lashes, creating a personalized, <i>voluminous effect</i>. Offering versatility in styles, lengths, and curls, these extensions enhance the eyes, requiring minimal daily makeup. With proper care, they last for weeks, making them an ideal choice for a confident, low-maintenance beauty routine. Discover the allure of <b>eyelash extensions</b> at <b>Tozsér Éva</b>, where skilled technicians craft captivating lash looks tailored to individual preferences.", 180, "Tozsér Éva", "Eyelash Extension", "1h"),
("Eyelash Lift", "<b>Eyelash Lift</b> is a revolutionary beauty treatment that enhances the natural beauty of your lashes. This procedure involves lifting and curling your natural lashes, providing an instant brightening effect to the eyes. The <i>curling</i> technique imparts a youthful and wide-eyed appearance, making the eyes look more open and lifted. The process is painless and typically lasts for several weeks, offering a semi-permanent solution for those seeking a fuss-free and time-saving beauty routine. With an <i>Eyelash Lift</i>, you can enjoy beautifully lifted lashes that require minimal daily maintenance. Discover the transformative power of an <b>Eyelash Lift</b> at our salon, where skilled professionals tailor the treatment to accentuate your natural lash line.", 220, "Tozsér Éva", "Eyelash Lift", "1h30"),
("Eyelash Tint", "<b>Eyelash Tint</b> is a fantastic beauty solution for those looking to add definition and depth to their lashes. This procedure involves applying a semi-permanent dye to the lashes, darkening them and creating a luscious, <i>intense color</i> without the need for mascara. The <i>tinting</i> process is quick, painless, and results in a natural-looking enhancement that lasts for several weeks. With an <b>Eyelash Tint</b>, you can enjoy beautifully colored lashes that frame your eyes, providing a low-maintenance alternative to daily makeup application. Discover the allure of enhanced lashes with our skilled technicians, who specialize in customizing <b>Eyelash Tint</b> treatments to suit your unique preferences.", 80, "Tozsér Éva", "Eyelash Tint", "0h30");