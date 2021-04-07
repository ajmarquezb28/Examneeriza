CREATE TRIGGER `actualizar_costo` BEFORE UPDATE ON `producto`
FOR EACH ROW 
BEGIN
  SET costo = 0.9*precio
  WHERE stock < 100
END;