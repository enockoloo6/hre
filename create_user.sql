-- Create impact user
CREATE USER 'hre'@'localhost' IDENTIFIED BY 'hre>Peklo123@';
-- Grant permissions to impact user
GRANT INSERT ON hredb.* TO 'hre'@'localhost';
GRANT DELETE ON hredb.* TO 'hre'@'localhost';
GRANT UPDATE ON hredb.* TO 'hre'@'localhost';
GRANT SELECT ON hredb.* TO 'hre'@'localhost';
-- Reload permissions 
FLUSH PRIVILEGES;