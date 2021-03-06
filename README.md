# JBZoo CCK Cli

#### Command line wrapper for Joomla JBZoo CCK v220

[![License](https://poser.pugx.org/jbzoo/cck-cli/license)](https://packagist.org/packages/jbzoo/cck-cli) [![Latest Stable Version](https://poser.pugx.org/JBZoo/cck-cli/v/stable)](https://packagist.org/packages/jbzoo/cck-cli) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/JBZoo/CCK-Cli/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/JBZoo/CCK-Cli/?branch=master)

### Install

The best way
```sh
cd <Joomla root path>
composer create-project jbzoo/cck-cli:1.x-dev ./cli/jbzoo/
```

...or unpack last zip `jbzoo-cli-pack.zip` from [Releases page](https://github.com/JBZoo/CCK-Cli/releases) to <joomla>/cli/jbzoo

### Example
```sh
# General Help
./cli/jbzoo/bin/jbzoo

# Database reindex
./cli/jbzoo/bin/jbzoo tools:reindex

# Import items
./cli/jbzoo/bin/jbzoo import:items                        # Default profile ./configs/import-items-default.php
./cli/jbzoo/bin/jbzoo import:items --profile=myprofile    # Custom profile ./configs/import-items-myprofile.php
./cli/jbzoo/bin/jbzoo import:items --profile=myprofile -v # Verbose is debug mode

# YML Export items for Yandex.Market
./cli/jbzoo/bin/jbzoo export:yml-items                      # Export items to YML file
./cli/jbzoo/bin/jbzoo export:yml-items --profile=myprofile  # Custom profile ./configs/export-yml-items-myprofile.php

# CSV Export items
./cli/jbzoo/bin/jbzoo export:csv-items                      # Export items to CSV file
./cli/jbzoo/bin/jbzoo export:csv-items --profile=myprofile  # Custom profile ./configs/export-csv-items-myprofile.php
```

### Preview screen

This screen is just preview of beta version.
So, full command list see via `jbzoo list`.
![Output example#1](http://jbzoo.ru/images/blog/jbzoo-import-by-cron/example.png)


### Todo list

Add new commands
```
export
  export:categories  Export categories to CSV file

import
  import:categories  Import categories from CSV file

tools
  tools:check-jbzoo  Check JBZoo Files src summs
  tools:check-zoo    Check Zoo Files src summs
```

### Support

Learn more on [JBZoo Support Forum](http://forum.jbzoo.com/)


### License

MIT
