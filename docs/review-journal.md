# Review Journal

This journal records the domain cases that matter before widening the public API.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 153, lane `ship`
- `stress`: `claim drift`, score 227, lane `ship`
- `edge`: `replay exposure`, score 173, lane `ship`
- `recovery`: `policy width`, score 118, lane `watch`
- `stale`: `trust boundary`, score 262, lane `ship`

## Note

The repository should be understandable without pretending it is larger than it is.
