export const filterIgnores = (message, ignores) => {
  var flag = false;
  ignores.map((ignore) => {
    if (message.message.match(ignore.pattern)) {
      flag = true;
      return false;
    }
  })
  return flag;
}
