module org.example.a05_02_javafx {
    requires javafx.controls;
    requires javafx.fxml;

    requires org.kordamp.bootstrapfx.core;

    opens org.example.a05_02_javafx to javafx.fxml;
    exports org.example.a05_02_javafx;
}