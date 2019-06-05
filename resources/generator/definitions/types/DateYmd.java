package definitions.types;

import definitions.official.TypeSpec;

public class DateYmd extends Type {
    @Override
    public TypeSpec getSpec() {
        return TypeSpec.DATE;
    }

    @Override
    public String getComment() {
        return "Y-m-d 例如 2019-01-01";
    }

    public String getLaravelRule() {
        return "date_format:Y-m-d";
    }

    @Override
    public String getLaravelParam() {
        return "Y-m-d";
    }
}
