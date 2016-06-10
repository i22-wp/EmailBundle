# EmailBundle

Email bundle for dev environment of Symfony 2 & 3. It allows to store emails as *.eml files and read them after that.


## Setup

config_dev.yml

```yaml
parameters:
    ton.email_bundle.dir: '%kernel.root_dir%/../var/emails'

...
    
swiftmailer:
    transport: ton.email_bundle.swift.file_transport
```

For more info look here: https://github.com/66Ton99/EmailBundle
