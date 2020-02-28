PROGRAM HelloName(INUPUT, OUTPUT);
USES
  DOS;
VAR
  i, k: INTEGER;
  name, rav: CHAR;
  StQuery,Prim,Param : STRING;
BEGIN
  WRITELN('ContentType: text/plain');
  WRITELN;
  WRITE('HELLO ');
  name := '0';
  rav := '0';
  Prim := 'name=';
  StQuery := (GetEnv('QUERY_STRING'));
  FOR i := 1 to length(StQuery) - 5 DO
    BEGIN
      Param :=( COPY(StQuery, i, 5));
      k := i + 5;
      IF Param = Prim THEN
      BEGIN
        WHILE (StQuery[k] <> '&') AND  (k <> length(StQuery) + 1) DO
          BEGIN
            WRITE(StQuery[k]);
            k:= k + 1;
            IF (StQuery[k] = '='
            THEN
              rav := '1'
          END;
        name := '1';
        IF rav = '1'
        THEN
          name := '0'
    END;
  IF name = '0' THEN
    WRITELN('ANONIMUS')
END.