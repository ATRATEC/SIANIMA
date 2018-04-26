CREATE TABLE sianima.servico (
   id BIGINT AUTO_INCREMENT NOT NULL,
   descricao VARCHAR(120) NOT NULL,
  PRIMARY KEY (id)
) ENGINE = InnoDB ROW_FORMAT = DEFAULT;

ALTER TABLE sianima.servico
  ADD UNIQUE INDEX uk_servico (descricao);