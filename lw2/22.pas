PROGRAM Sarah(INPUT, OUTPUT);
USES
  DOS;
BEGIN{Sarah}
  WRITELN('ContentType: text/plain');
  WRITELN;
  IF GetEnv('QUERY_STRING') = 'lantern=1'
  THEN
    WRITELN('The British Are Coming By Land')
  ELSE
    IF GetEnv('QUERY_STRING') = 'lantern=2'
    THEN
      WRITELN('The British Are Coming By Sea')
    ELSE
      WRITELN('I Don`t Know')
END.{Sarah}
