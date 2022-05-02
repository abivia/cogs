<?php

namespace Abivia\Cogs;

enum InvoiceTransactionType
{
    case BalanceCredit;
    case BalanceDebit;
    case BalanceUnchanged;
}
