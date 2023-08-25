import React from 'react';
import { makeStyles } from '@material-ui/core/styles';

import { Card, CardHeader, Divider, Grid } from '@material-ui/core';

import { gridSpacing } from '../../../../store/constant';

import Table from '@material-ui/core/Table';
import TableBody from '@material-ui/core/TableBody';
import TableCell from '@material-ui/core/TableCell';
import TableContainer from '@material-ui/core/TableContainer';
import TableHead from '@material-ui/core/TableHead';
import TableRow from '@material-ui/core/TableRow';
import Chip from '@material-ui/core/Chip';
import Button from '@material-ui/core/Button';
import Icon from '@material-ui/core/Icon';



const useStyles = makeStyles((theme) => ({
    table: {
        minWidth: 350
    },
    successDark: {
        color: theme.palette.success.dark
    },
    errorDark: {
        color: theme.palette.error.dark
    },
    warningDark: {
        color: theme.palette.warning.dark
    },
    infoDark: {
        color: theme.palette.info.dark,
    },
    button: {
        margin: theme.spacing(1),
    },

}));

function createData(id, category, price, status) {
    return { id, category, price, status };
}

const rows = [
    createData(145252, 'car', 6.0, 'Preparing'),
    createData(68545, 'mobile', 9.0, 'Pendding'),
    createData(8568585, 'car', 16.0, 'Running'),
    createData(52837465, 'pc', 3.7, 'Done'),
    createData(4555754, 'car', 16.0, 'Done')
];

const status = {
    Preparing: { textColor: 'warning' },
    Pendding: { textColor: 'warning' },
    Running: { textColor: 'info' },
    Done: { textColor: 'success' },
};

export default function RequestTable() {
    const classes = useStyles();

    return (
        <React.Fragment>
            <Grid container spacing={gridSpacing}>
                <Grid item xs={12}>
                    <Card>
                        <CardHeader title="Requests List" />
                        <Divider />
                        <TableContainer>
                            <Table className={classes.table} aria-label="simple table">
                                <TableHead>
                                    <TableRow>
                                        <TableCell>ID</TableCell>
                                        <TableCell align="center">Category</TableCell>
                                        <TableCell align="center">price&nbsp;($)</TableCell>
                                        <TableCell align="center">status</TableCell>
                                        <TableCell align="center">action</TableCell>
                                    </TableRow>
                                </TableHead>
                                <TableBody>
                                    {rows.map((row) => (
                                        <TableRow key={row.id}>
                                            <TableCell component="th" scope="row">
                                                #{row.id}
                                            </TableCell>
                                            <TableCell align="center">{row.category}</TableCell>
                                            <TableCell align="center">{row.price}</TableCell>
                                            <TableCell align="center">
                                                <Chip label={row.status} color={status[row.status].textColor} />
                                            </TableCell>
                                            <TableCell align="center">
                                                <Button
                                                    color="primary"
                                                    className={classes.button}
                                                    href={"/request/" + row.id}
                                                >
                                                    more
                                                </Button>
                                            </TableCell>
                                        </TableRow>
                                    ))}
                                </TableBody>
                            </Table>
                        </TableContainer>
                    </Card>
                </Grid>
            </Grid>
        </React.Fragment>
    );
}
