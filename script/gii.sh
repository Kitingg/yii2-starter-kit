#!/usr/bin/env bash

php ./console/yii gii/model \
    --tableName=* \
    --overwrite=1 \
    --color=1 \
    --interactive=0 \
    --template=myModel \
    --generateLabelsFromComments=1 \
    --ns=common\\\models\\\generated\\models \
    --queryNs=common\\\models\\\generated\\query \
    --baseClass=common\\\ActiveRecord \
    --queryBaseClass=common\\\ActiveQuery \
    --generateQuery=1