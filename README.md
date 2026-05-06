# harbor-sec-webhook-field

`harbor-sec-webhook-field` explores security tooling with a small PHP codebase and local fixtures. The technical goal is to implement a PHP security tooling project for webhook state machine modeling, using transition tables and invalid-transition tests.

## Use Case

The point is to make a small domain rule concrete enough that a reader can change it and immediately see what broke.

## Harbor Sec Webhook Field Review Notes

`stale` and `recovery` are the cases worth reading first. They show the optimistic and cautious ends of the fixture.

## Highlights

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/harbor-sec-webhook-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `trust boundary` and `policy width`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Code Layout

The implementation keeps the scoring rule plain: reward signal and confidence, preserve slack, penalize drag, then classify the result into a review lane.

The PHP addition stays small enough to inspect in one sitting.

## Run The Check

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Regression Path

The same command runs the local verification path. The highest-scoring domain case is `stale` at 262, which lands in `ship`. The most cautious case is `recovery` at 118, which lands in `watch`.

## Future Work

The repository is intentionally scoped to local checks. I would expand it by adding adversarial fixtures before adding features.
