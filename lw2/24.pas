PROGRAM WorkWithQueryString(INPUT, OUTPUT);
USES
  DOS;
FUNCTION GetQueryStringParameter(Key: string): string;
VAR
  i, k, l: INTEGER;
  n: CHAR;
  S,D: STRING;
BEGIN
  n := '0';
  S := (GetEnv('QUERY_STRING'));
  FOR i := 1 to length(S) DO
    BEGIN
      D :=( COPY(S, i, length(Key)));
      IF D = Key THEN
      BEGIN
        l:= 0;
        k := i + length(Key);
        WHILE (S[k] <> '&') AND  (k <> length(S) + 1) DO
          BEGIN
            k:= k + 1;
            l:= l + 1
          END;
       GetQueryStringParameter := Copy(S,i + length(Key) + 1 ,l - 1);
       n := '1'
      END
    END;
  IF n = '0' THEN
   GetQueryStringParameter := 'nothing';
END;
BEGIN
  WRITELN('ContentType: text');
  WRITELN;
  WRITELN('First Name: ', GetQueryStringParameter('firstname'));
  WRITELN('Last Name: ', GetQueryStringParameter('last_name'));
  WRITELN('Age: ', GetQueryStringParameter('age'))
END.