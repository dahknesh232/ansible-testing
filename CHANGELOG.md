commit 77f1bf3916a485c800b0c8d50236793403993410
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   18 minutes ago

    added dev as remote user - no more -K

commit 521cb2719db442e1816a83fbff0fe5f27ada743a
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   23 minutes ago

    renamed to public for easier testing

commit 902adffdef6dcc03a4beee2e4b9f2afe43e2a8d6
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   33 minutes ago

    added sudoers to dev

commit 6f1ea11cb516206317f3c7448f70cbb6025400ac
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   36 minutes ago

    added user dev to web/db/file servers via ssh key

commit b2032211ca02cd571c9e96457df94c2a9c88cdba
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   81 minutes ago

    moved all to playbooks

commit 56d82654a22eb49a3becc45572b6ca461870316d
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   2 hours ago

    added gather.yml to gather facts and place to the side for copying to php side and visualization

commit a14b2d54fcb89456c8e23f67e9f187f02b90f15c
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   3 hours ago

    fixed php

commit eec990e0a98ea440671279657d5ebd3ea34607f1
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   4 hours ago

    changes to index.html, manifest, added_remove all packages, changes to webserver - added ensuring apache2 is running

commit 006dd6d782383324dd9b70b9f445fec606277dfd
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   5 hours ago

    added play to copy phpino as index

commit a2e8e41f95b26a0e2a70ed5818b11c14474e3d61
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   6 hours ago

    created roles: web_servers, db_servers, file_servers, installed Apache2, MariaDB+PHPMyAdmin, GlusterFS

commit f057d27d023172c37fef812c3c7929b3f3e86288
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   6 hours ago

    added variables for packages

commit 4cbe1cd1465cc0edca73c6f388e1284b0358c9f4
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   6 hours ago

    fixed remove_docker.yml -- removed Uninitiate Swarm - as no swarm currently initiated

commit 96bed681c3288296dd58215661ead45481b759d8
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   6 hours ago

    cleaning up playbook 2

commit c7d3d1ae5d7226d022260cb777e6a45f0e51c0ae
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   6 hours ago

    cleaning up playbook

commit 3dc40572089059ad8e8fa979a67f056ea4831087
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   7 hours ago

    added reboot playbook, renamed playbooks to be better descriptive

commit 09f63e785c6b158031447624d8437ad8ff0cdfd1
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   19 hours ago

    upgraded but apache on master still doesn't load - probably because of previous ip tables

commit 7187a998ba92af75ea77e1a22395c103d998c42f
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   19 hours ago

    new playbooks remove apache

commit 5a10e9d76bbe4901ad0f8e251a6a54bdf922b363
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   Sat 22:54

    added playbooks for install apache and remove current docker install

commit 072ae57bccc0a917d4319fd8be86b2de236d5061
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   Sat 19:13

    added cfg -- defined key and inventory file

commit c14b119670fbba1663736db010f623fcc6948485
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   Sat 19:04

    fixed manifest -- removed node2

commit d77ee47a9448d78ab11fe99144136de79eac15f4
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   Sat 18:58

    fixed manifest

commit 315b9ceea713a7947106fcc7f4326952d405e606
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   Sat 18:56

    added manifest

commit 36227274a1ff4e05117d44c10d3b0b556c3cd617
Author: Dahknesh232 <soundlifeenterprisesllc@gmail.com>
Date:   Sat 18:46

    INITIAL COMMIT - updated README.md

commit 9c17bebce79447d5411b53ecd1c8a454dd82b7ee
Author: dahknesh232 <60906689+dahknesh232@users.noreply.github.com>
Date:   Sat 18:11

    Initial commit
